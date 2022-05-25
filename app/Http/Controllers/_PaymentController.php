<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Program;
use App\Models\Admission;
use Illuminate\Http\Request;
use App\Models\TuitionDetail;
use App\Models\PaymentHistory;
use App\Models\TuitionDescription;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Unicodeveloper\Paystack\Facades\Paystack;

class _PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function redirectToGateway(Request $request)
    {
        try {
            $paymentHistory = PaymentHistory::where(
                'email',
                $request->email
            )->first();
            //dd($paymentHistory);
            if ($paymentHistory !== null) {
                return Redirect::back()->with(
                    'info',
                    'You have already paid your tuition, log in to complete your registration.'
                );
            }
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            //return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
            return Redirect::back()->with(
                'error',
                'The paystack token has expired. Please refresh the page and try again.'
            );
        }
    }

    public function handleGatewayCallback()
    {
        try {
            //DB::transaction(function () {
            // Get payment details
            $paymentDetails = Paystack::getPaymentData();
            //return dd($paymentDetails);

            $paymentHistory = new PaymentHistory();
            $paymentHistory->jamb_no = $paymentDetails['data']['id'];
            $paymentHistory->amount = $paymentDetails['data']['amount'] / 100;
            $paymentHistory->date = date('Y-m-d');
            $paymentHistory->email =
                $paymentDetails['data']['customer']['email'];
            $paymentHistory->tranx_id = $paymentDetails['data']['reference'];
            $paymentHistory->status = $paymentDetails['data']['status'];
            $paymentHistory->save();

            //return $paymentHistory;

            $admissionCount = Admission::where('accepted', 'Yes')->get();

            //dd(count(collect($admissionCount)));

            $admission = Admission::where(
                'email',
                $paymentHistory->email
            )->first();

            $getStudentInfo = $admission;

            $admission->accepted = 'Yes';
            $admission->registration_no =
                'UG21/SCCS/' . (int) 1000 + count(collect($admissionCount)) + 1; // temporary
            $admission->amount_paid = $paymentDetails['data']['amount'] / 100;
            $admission->save();

            /*  $admission->update([
                    'accepted' => 'Yes',
                    'registration_no' =>
                        'UG21/SCCS/1004' /*  . count(collect($admission)) + 1, *,
                    'amount' => $paymentDetails['data']['amount'] / 100,
                ]); */

            //return $admission;
            // });

            session()->put('getStudentInfo', $getStudentInfo);

            //return redirect()->route('student', $getStudentInfo);

            return redirect()
                ->route('student')
                ->with(
                    'message',
                    'Payment was successful, proceed to update your Biodata.' /* ['getStudentInfo' => $getStudentInfo] */
                );

            /* return Redirect::route('student', compact('admission'))->with(
                'message',
                'Payment was successfull.'
            ); */
            //return Redirect::back()->withMessage(['msg'=>'Payment was successfull.', 'type'=>'success']);
        } catch (\Exception $e) {
            //return $e->getMessage();
            dd($e->getMessage());
            return Redirect::back()->with(
                'error',
                'Something went wrong. ' . $e->getMessage()
            );
        }
    }

    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jamb_no' => 'required|string',
            'dob' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }

        try {
            $admission = Admission::where('jamb_no', $request->jamb_no)
                ->where('accepted', 'No')
                ->where('dob', $request->dob)
                //->with('program')
                ->with([
                    'program' => function ($query) {
                        $query->select('program_id', 'program_name');
                    },
                ])
                ->first([
                    'program_id',
                    'first_name',
                    'surname',
                    'other_names',
                    'jamb_no',
                    'email',
                    'jamb_score',
                    'programme',
                    'gender',
                    'country',
                    'state',
                    'lga',
                    'dob',
                    'session',
                    'programme',
                    'date_of_admission',
                    'registration_deadline',
                    'tuition_id',
                ]);
            /* ->toArray() */

            //return $admission;

            $getProgram = TuitionDetail::where('status', 'active')
                ->where(
                    'program',
                    /* $admission['programme'] */ $admission->programme
                )
                //->where('tuition_id', $admission['tuition_id'])
                ->get()
                ->toArray();

            //return $getProgram;

            /* $tuitionDescription = TuitionDescription::with('tuition') */

            $tuitionDescription = TuitionDescription::select('item', 'amount')
                ->where('tuition_id', $admission['tuition_id'])
                ->get();
            //->toArray();

            //return $tuitionDescription;

            $tuitionSum = TuitionDescription::where(
                'tuition_id',
                $admission['tuition_id']
            )->sum(DB::raw('amount'));

            $today = Carbon::parse(date('Y-m-d'));
            $regStartDate = Carbon::parse($admission['date_of_admission']);
            $regEndDate = Carbon::parse($admission['registration_deadline']);

            $regDaysLeft = $today->diffInDays($regEndDate);
            $lateRegPenalty = $getProgram[0]['late_reg_penalty'] ?? 0;

            $acceptanceFee = $getProgram[0]['acceptance_fee'] ?? 0;

            $hostelFee = $getProgram[0]['hostel_fee'] ?? 0;

            $lateRegPenaltyAmount = 0;
            if ($regDaysLeft <= 0) {
                $lateRegPenaltyAmount = $lateRegPenalty;
            }

            $tuition = [
                'acceptanceFee' => (int) $acceptanceFee,
                'tuitionSum' => (int) $tuitionSum,
                'regStartDate' => $regStartDate->format('l d/m/Y'),
                'regEndDate' => $regEndDate->format('l d/m/Y'),
                'regDaysLeft' => (int) $regDaysLeft,
                'lateRegPenaltyAmount' => (int) $lateRegPenaltyAmount,
                'hostelFee' => (int) $hostelFee,
                'admission' => $admission,
                'tuitionDescription' => $tuitionDescription,
            ];

            //return $tuitionDescription;

            //dd($tuition);
            return view(
                'pages.acceptance.index',
                compact('tuition', 'tuitionDescription')
            );
        } catch (Exception $e) {
            //return $error->getMessage();
            return Redirect::back()->with(
                'error',
                'Something went wrong. ' . $e->getMessage()
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
