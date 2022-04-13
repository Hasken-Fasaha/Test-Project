<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Program;

class _CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::latest()->paginate(5);
        $programs =Program::all('program_id','program_name');
        return view('pages.course.index',compact('courses', 'programs'))->with(request()->input('page'));
       // return view('course.index',compact('courses'))->with(request()->input('page'));
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
        $request->validate([
        'course_code' => 'required',
        'course_title' => 'required',
        'credit_unit' => 'required'
        ]);


        
        if($request->course_code != ""){
            $course = new Course;
            $course->course_code =  $request->course_code;
            $course->course_title = $request->course_title;
            $course->credit_unit =  $request->credit_unit;
            $course->program_id =   $request->program_id;
            $course->semester =   $request->semester;
            $course->level =   $request->level;
            $course->save();
        return redirect('/course')->with('success','Course Successfully Added!');
   
        }else{
            return  redirect('/course')->with('error', 'Course Not Added!');
        }
        
       

 }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
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
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        if (!is_null($course)) {
            return $course;
        }
    }

  
    public function update(Request $request)
    {
        $val=$request->validate([
            'course_code' => 'required',
        ]);
        if(!empty($val)){
            Course::find($request->course_code)->update([
                'faculty_name' => $request->facul_name,
                'course_code' =>  $request->course_code,
                  'course_title' => $request->course_title,
       'credit_unit' =>  $request->credit_unit,
        'program_id' =>   $request->program_id,
        'semester' =>  $request->semester,
        'level' =>   $request->level,
                ]);
            return redirect('/course')->with('success', 'Updated Successfully!');
        }else{
            return redirect('/course')->with('error', 'Not Updated!');
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
            Course::find($id)->delete();
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