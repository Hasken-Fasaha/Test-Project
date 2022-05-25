<?php

namespace App\Http\Controllers;
use App\Models\TuitionDescription;
use App\Models\TuitionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class _TuitionDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuition_details = TuitionDetail::where('status', 'active')->get();
        //return $tuition_details;
        return view('pages.tuition-details.index', compact('tuition_details'));
    }

    public function fetchAll()
    {
        //$tuition_descriptions = TuitionDescription::with("tuition")->orderBy("item","asc")/* ->groupBy('tuition_id') */->get();

        $tuition_descriptions = DB::table('tuition_descriptions')
            ->join(
                'tuition_details',
                'tuition_details.id',
                '=',
                'tuition_descriptions.tuition_id'
            )
            ->select(
                'tuition_details.program as program',
                'tuition_details.session as session',
                'tuition_details.registration_category as registration_category',
                'tuition_details.indigene_category as indigene_category',
                'tuition_details.updated_at as updated_at',
                'tuition_descriptions.tuition_id as tuition_id',
                \DB::raw('SUM(tuition_descriptions.amount) AS total_fee'),
                \DB::raw(
                    'SUM(tuition_descriptions.tuition_id) AS total_tuition_id'
                )
            )
            ->groupBy(
                'tuition_details.program',
                'tuition_details.session',
                'tuition_details.registration_category',
                'tuition_details.indigene_category',
                'tuition_details.updated_at',
                'tuition_descriptions.tuition_id'
            )
            ->orderBy('tuition_details.program', 'ASC')
            ->get()
            ->toArray();

        //dd($tuition_descriptions);

        $output = '';
        if ($tuition_descriptions != null) {
            $output .= '<table class="table table-striped table-sm text-center align-middle" id="">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Programme</th>
                <th>Session</th>
                <th>Registration Category</th>
                <th>Indigene Category</th>
                <th>Total Payable Fee</th>
                <th>Updated At </th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($tuition_descriptions as $key => $detail) {
                $output .=
                    '<tr>
                <td>' .
                    $key +
                    1 .
                    '</td>
                <td>' .
                    $detail->program .
                    '</td>
                <td>' .
                    $detail->session .
                    '</td>
                <td>' .
                    $detail->registration_category .
                    '</td>
                <td>' .
                    $detail->indigene_category .
                    '</td>
                <td>' .
                    number_format($detail->total_fee, 0) .
                    '</td>
                <td>' .
                    \Carbon\Carbon::parse($detail->updated_at)->format(
                        'd/m/Y'
                    ) .
                    '</td>
                <td>
                  <a href="# " id="' .
                    $detail->tuition_id .
                    '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editRecordModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="# " id="' .
                    $detail->tuition_id .
                    '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editRecordModal"><i class="bi-info-square h4"></i></a>

                  <a href="#" id="' .
                    $detail->tuition_id .
                    '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h3 class="text-center text-secondary my-5">No record found.</h3>';
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
        $validator = Validator::make($request->all(), [
            'program' => 'required|numeric',
            'dynamicField.*.tuition_id' => 'required|numeric',
            'dynamicField.*.item' => 'required|string',
            'dynamicField.*.amount' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }

        try {
            DB::transaction(function () use ($request) {
                foreach ($request->dynamicField as $key => $value) {
                    TuitionDescription::create($value);
                }
            });
            return response()->json([
                'status' => 200,
                'data' => $request->dynamicField,
            ]);
        } catch (\Exception $e) {
            return back()->with('something went wrong');
        }
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
