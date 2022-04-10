<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class _FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties= Faculty::all();
        return view('pages.faculty.index',compact('faculties'));
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
        // dd($request);
        $val=$request->validate([
            'faculty_name' => 'required',
        ]);
        if(!empty($val)){

            $faculty_id =  substr($request->faculty_name,0,3)."-".$this->faculty_id_generator();
       
                if($request->faculty_name != ""){
                    $faculty = new Faculty();
                    $faculty->faculty_name =$request->faculty_name;
                    $faculty->faculty_id =$faculty_id;
                    $faculty ->save();
                    return redirect('/faculty')->with('success', 'Faculty Successfully Added!');
                }else{
                    return  redirect('/faculty')->with('error', 'Faculty Not Added!');
                }
        }else{
            return  redirect('/faculty')->with('error', 'Faculty Already Exist!');
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
        $faculty = Faculty::find($id);
        if (!is_null($faculty)) {
            return $faculty;
        }
    }

  
    public function update(Request $request)
    {
        $val=$request->validate([
            'facul_name' => 'required',
        ]);
        if(!empty($val)){
            Faculty::find($request->facul_id)->update([
                'faculty_name' => $request->facul_name,
                ]);
            return redirect('/faculty')->with('success', 'Updated Successfully!');
        }else{
            return redirect('/faculty')->with('error', 'Not Updated!');
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
            Faculty::find($id)->delete();
            return response()->json(['success'=>'Deleted Successfully!']);
        }else{
            return response()->json(['error'=>'Not Deleted Successfully!']);
        }
    }

    protected function faculty_id_generator(){

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
