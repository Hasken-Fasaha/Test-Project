<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class _GradeController extends Controller
{
    
	public function index() {
		return view('grades.index');
	}

	public function fetchAll() {
		$grades = Grade::orderBy('grade', 'asc')->get();
		$output = '';
		if ($grades->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Minimum</th>
                <th>Maximum</th>
                <th>Grade</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($grades as $key => $grade) {
				$output .= '<tr>
                <td>' . $key + 1 . '</td>
                <td>' . $grade->min . '</td>
                <td>' . $grade->max . '</td>
                <td>' . $grade->grade . '</td>
                <td>
                  <a href="#" id="' . $grade->grade_id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editGradeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $grade->grade_id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
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
            'min'=> 'required|numeric|max:100|min:0',
            'max'=>'required|numeric|max:100|min:0',
            'grade'=>'required|max:1',
            'grade_id' => 'nullable',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }

		$grade = [
            'min' => $request->min, 
            'max' => $request->max, 
            'grade' => $request->grade, 
            'grade_id' => Str::random(10)
        ];
		Grade::create($grade);
		return response()->json([
			'status' => 200,
		]);
	}

	public function edit(Request $request) {
		$id = $request->id;
		$grade = Grade::where('grade_id', $id)->first();
        //dd($grade->toArray());
		return response()->json($grade);
	}

	public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'min'=> 'required|numeric|max:100|min:0',
            'max'=>'required|numeric|max:100|min:0',
            'grade'=>'required|max:1',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }

		$grade = Grade::where('grade_id', $request->grade_id)->first(); 
        $grade->min = $request->min;
        $grade->max = $request->max;
        $grade->grade = $request->grade;
        $grade->save();
        //dd($grade->toArray());
		/* $data = [
            'min' => $request->min, 
            'max' => $request->max, 
            'grade' => $request->grade, 
                ];
		$grade->update($data); */
		return response()->json([
			'status' => 200,
		]);
	}

	public function delete(Request $request) {
		$id = $request->id;
		$grade = Grade::find($id);
		Grade::destroy($id);
	}
}
