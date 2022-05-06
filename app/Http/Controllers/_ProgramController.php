<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Program;

class _ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes= Program::all();
        $departments= Department::all();
        return view('pages.programme.index',compact('programmes','departments'));
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
            'dept_id' => 'required',
            'programme_name' => 'required',
        ]);
        if(!empty($val)){
            
            $prog_id =  substr($request->programme_name,0,3)."-".$this->program_id_generator();
          
       
                if($request->programme_name != ""){
                    $program = new Program();
                    $program->program_name =$request->programme_name;
                    $program->program_id =$prog_id;
                    $program->dept_id =$request->dept_id;
                    $program ->save();
                    return redirect('/programme')->with('success', 'Programme Successfully Added!');
                }else{
                    return  redirect('/programme')->with('error', 'Programme Not Added!');
                }
        }else{
            return  redirect('/programme')->with('error', 'Programme Already Exist!');
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
        $program = Program::find($id);
        if (!is_null($program)) {
            return $program;
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
            'prog_namee' => 'required',
            'dept_ide' => 'required',
        ]);
        if(!empty($val)){
            Program::find($request->prog_ide)->update([
            'program_name' => $request->prog_namee,
            'dept_id' => $request->dept_ide,
            ]);
            return redirect('/programme')->with('success', 'Updated Successfully!');
        }else{
            return redirect('/programme')->with('error', 'Not Updated Successfully!');
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
            Program::find($id)->delete();
            return response()->json(['success'=>'Deleted Successfully!']);
        }else{
            return response()->json(['error'=>'Not Deleted Successfully!']);
        }
    }

    protected function program_id_generator(){

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
