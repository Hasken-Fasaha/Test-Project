<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class _AdmissionController extends Controller {

    public function index()
    {
        return view('admissions.index');
    }

    public function fetchAdmission()
    {
        $admissions = Admission::all();
        return response()->json([
            'admissions'=>$admissions,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jamb_no'=> 'required|max:20',
            'jamb_score'=>'required|numeric',
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
        else
        {
            $admission = new Admission;
            $admission->jamb_no = $request->input('jamb_no');
            $admission->jamb_score = $request->input('jamb_score');
            $admission->email = $request->input('email');
            $admission->dob = $request->input('dob');
            $admission->save();
            return response()->json([
                'status'=>200,
                'message'=>'Admission Added Successfully.'
            ]);
        }

    }

    public function edit($id)
    {
        $admission = Admission::find($id);
        if($admission)
        {
            return response()->json([
                'status'=>200,
                'admission'=> $admission,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Admission Found.'
            ]);
        }

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'jamb_no'=> 'required|max:20',
            'jamb_score'=>'required|numeric',
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
        else
        {
            $admission = Admission::find($id);
            if($admission)
            {
                $admission->jamb_no = $request->input('jamb_no');
                $admission->jamb_score = $request->input('jamb_score');
                $admission->email = $request->input('email');
                $admission->dob = $request->input('dob');
                $admission->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Admission Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No Admission Found.'
                ]);
            }

        }
    }

    public function destroy($id)
    {
        $admission = Admission::find($id);
        if($admission)
        {
            $admission->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Admission Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Admission Found.'
            ]);
        }
    }

}