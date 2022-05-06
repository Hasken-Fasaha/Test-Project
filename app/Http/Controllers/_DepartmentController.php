<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Department;
class _DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties= Faculty::all();
        $departments= Department::all();
        return view('pages.department.index',compact('faculties','departments'));
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
        $val=$request->validate([
            'dept_name' => 'required',
            'faculty_id' => 'required',
        ]);
        if(!empty($val)){
            
            $dept_id =  substr($request->dept_name,0,3)."-".$this->dept_id_generator();
          
       
                if($request->dept_name != ""){
                    $department = new Department();
                    $department->dept_name =$request->dept_name;
                    $department->dept_id =$dept_id;
                    $department->faculty_id =$request->faculty_id;
                    $department ->save();
                    return redirect('/department')->with('success', 'Department Successfully Added!');
                }else{
                    return  redirect('/department')->with('error', 'Department Not Added!');
                }
        }else{
            return  redirect('/department')->with('error', 'Department Already Exist!');
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
        $department = Department::find($id);
        if (!is_null($department)) {
            return $department;
        }
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
        $val=$request->validate([
            'dept_namee' => 'required',
            'facul_ide' => 'required',
        ]);
        if(!empty($val)){
            Department::find($request->dept_ide)->update([
                'dept_name' => $request->dept_namee,
                'faculty_id' => $request->facul_ide,
                ]);
            return redirect('/department')->with('success', 'Updated Successfully!');
        }else{
            return redirect('/department')->with('error', 'Not Updated!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!empty($id)){
            Department::find($id)->delete();
            return response()->json(['success'=>'Deleted Successfully!']);
        }else{
            return response()->json(['error'=>'Not Deleted Successfully!']);
        }
    }

    protected function dept_id_generator(){

        $length=5;
        $key='';
        $alph=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2);
        $keys = range(0,9);
        for($i=0;$i<$length;$i++){
            $key .=$keys[array_rand($keys)];
        }
        return $key.$alph;
    }
}
