<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TuitionDetail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Program;

class _TuitionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuition_details = TuitionDetail::where("status","active")->get();
		return view('pages.tuitions.index',compact('tuition_details'));
    }

    public function fetchAll() {
		$tuition_details = TuitionDetail::orderBy('id', 'asc')->get();
		$output = '';
		if ($tuition_details->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Programme</th>
                <th>Session</th>
                <th>Registration Category</th>
                <th>Indigene Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($tuition_details as $key => $detail) {
				$output .= '<tr>
                <td>' . $key + 1 . '</td>
                <td>' . $detail->program . '</td>
                <td>' . $detail->session . '</td>
                <td>' . $detail->registration_category . '</td>
                <td>' . $detail->indigene_category . '</td>
                <td>
                  <a href="# " id="' . $detail->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editRecordModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $detail->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
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
            'program'=>'required|string',
            'session'=>'required|string',
            'registration_category'=>'required|string',
            'indigene_category'=> 'required|string',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }

		$tuition_details = [
            'program'=>$request->program,
            'session'=>$request->session,
            'registration_category'=>$request->registration_category,
            'indigene_category' => $request->indigene_category, 
        ];

        //return $tuition_details;
        //dd($tuition_details);

		TuitionDetail::create($tuition_details);
		return response()->json([
			'status' => 200,
            'data' => $tuition_details,
		]);
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
    public function edit(Request $request)
    {
        $id = $request->id;
		$tuition_details = TuitionDetail::find($id);
        //dd($tuition_details->toArray());
		return response()->json($tuition_details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'program'=>'required|string',
            'session'=>'required|string',
            'registration_category'=>'required|string',
            'indigene_category'=> 'required|string',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }

		$tuition_details = TuitionDetail::find($request->id);
        //dd($tuition_details->toArray());
		$data = [
            'program' => $request->program, 
            'session' => $request->session, 
            'registration_category' => $request->registration_category, 
            'indigene_category' => $request->indigene_category,
                ];

		$tuition_details->update($data);
		return response()->json([
			'status' => 200,
            'data' => $tuition_details,
		]);
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

    public function delete(Request $request) {
		$id = $request->id;
		$tuition_details = TuitionDetail::find($id);
		TuitionDetail::destroy($id);
	}
    
}