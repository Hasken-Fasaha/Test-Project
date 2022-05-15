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
        $tuition_details = TuitionDetail::where("status","active");
		return view('pages.tuitions.index',compact('tuition_details'));
    }

    public function fetchAll() {
		$admissions = TuitionDetail::with('programme')->orderBy('id', 'asc')->get();
		$output = '';
		if ($admissions->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Email</th>
                <th>JAMB No.</th>
                <th>JAMB Score</th>
                <th>Programme</th>
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
                <td>' . $admission->programme->program_name . '</td>
                <td>' . $admission->dob . '</td>
                <td>
                  <a href="# " id="' . $admission->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editAdmissionModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $admission->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
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
            'first_name'=>'required',
            'sur_name'=>'required',
            'other_name'=>'required',
            'jamb_no'=> 'required|max:10',
            'jamb_score'=>'required|numeric|max:400|min:1',
            'email'=>'required|email|max:191',
            'dob'=>'required|date',
            'program_id'=>'required',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }

		$admission = [
            'first_name'=>$request->first_name,
            'sur_name'=>$request->sur_name,
            'other_name'=>$request->other_name,
            'jamb_no' => $request->jamb_no, 
            'jamb_score' => $request->jamb_score, 
            'email' => $request->email, 
            'dob' => $request->dob, 
            'program_id' => $request->program_id, 
        ];

        //return $admission;
        //dd($admission);

		Admission::create($admission);
		return response()->json([
			'status' => 200,
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