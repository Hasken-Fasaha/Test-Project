<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Admission;
use Illuminate\Http\Request;
use App\Models\TuitionDetail;
use App\Models\TuitionDescription;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Program;

class _PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jamb_no' => 'required|min:10',
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
                ->with('program')
                ->first()
                ->toArray();

            $getProgram = TuitionDetail::where('status', 'active')
                ->where('program', $admission['programme'])
                ->get()
                ->toArray();

            /* $tuitionDescription = TuitionDescription::with('tuition') */

            $tuitionDescription = TuitionDescription::select('item', 'amount')
                ->where('tuition_id', $getProgram[0]['id'])
                ->get()
                ->toArray();

            $tuitionSum = TuitionDescription::where(
                'tuition_id',
                $getProgram[0]['id']
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

            //return $tuition;

            //dd($tuition);
            return view('pages.acceptance.index', compact('tuition'));
        } catch (Exception $error) {
            return $error->getMessage();
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
