<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
<<<<<<< Updated upstream
=======
        $courses = Course::latest()->paginate(5);
        $programs =Program::all('program_id','program_name');
        return view('course.index',compact('courses', 'programs'))->with(request()->input('page'));
       // return view('course.index',compact('courses'))->with(request()->input('page'));
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
    {
        //
=======
   {
        $request->validate([
        'course_code' => 'required',
        'course_title' => 'required',
        'credit_unit' => 'required'
        ]);
        $course = new Course;
        $course->course_code =  $request->course_code;
        $course->course_title = $request->course_title;
        $course->credit_unit =  $request->credit_unit;
        $course->program_id =   $request->program_id;
        $course->semester =   $request->semester;
        $course->level =   $request->level;



        $course->save();
        return redirect()->route('course.index')
        ->with('success','Course has been created successfully.');
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
        $course_cur = Course::latest()->where('course_code',$course->course_code)->get();
        //dd($course_cur);
        return view('course.show',compact('course_cur'));
>>>>>>> Stashed changes
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
