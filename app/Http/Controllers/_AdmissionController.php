<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class _AdmissionController extends Controller {

	public function index() {
		return view('admissions.index');
	}

	public function fetchAll() {
		$admissions = Admission::orderBy('email', 'asc')->get();
		$output = '';
		if ($admissions->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Email</th>
                <th>JAMB No.</th>
                <th>JAMB Score</th>
                <th>Birth Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($admissions as $key => $admission) {
				$output .= '<tr>
                <td>' . $key + 1 . '</td>
                <td>' . $admission->email . '</td>
                <td>' . $admission->jamb_no . '</td>
                <td>' . $admission->jamb_score . '</td>
                <td>' . $admission->dob . '</td>
                <td>
                  <a href="#" id="' . $admission->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editAdmissionModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $admission->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record found.</h1>';
		}
	}

	public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'jamb_no'=> 'required|max:10',
            'jamb_score'=>'required|numeric|max:400|min:1',
            'email'=>'required|email|max:191',
            'dob'=>'required|date',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }

		$admission = [
            'jamb_no' => $request->jamb_no, 
            'jamb_score' => $request->jamb_score, 
            'email' => $request->email, 
            'dob' => $request->dob, 
        ];
		Admission::create($admission);
		return response()->json([
			'status' => 200,
		]);
	}

	public function edit(Request $request) {
		$id = $request->id;
		$application = Admission::find($id);
        //dd($application->toArray());
		return response()->json($application);
	}

	public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'jamb_no'=> 'required|max:10',
            'jamb_score'=>'required|numeric|max:400|min:1',
            'email'=>'required|email|max:191',
            'dob'=>'required|date',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }

		$application = Admission::find($request->admission_id);
        //dd($application->toArray());
		$data = [
            'jamb_no' => $request->jamb_no, 
            'jamb_score' => $request->jamb_score, 
            'email' => $request->email, 
            'dob' => $request->dob
                ];

		$application->update($data);
		return response()->json([
			'status' => 200,
		]);
	}

	public function delete(Request $request) {
		$id = $request->id;
		$admission = Admission::find($id);
		Admission::destroy($id);
	}
}