<?php

namespace App\Http\Controllers;

use App\Models\RegComment;
use Illuminate\Http\Request;

class RegCommentController extends Controller
{

    public function comment(Request $request){
        $regcomment = new RegComment();
        $regcomment->comment =$request->comment;
        $regcomment->student_id =$request->student_id;
        $regcomment->staff_id =\Auth::user();
        $regcomment ->save();
        return response()->json(['success'=>'Comment Sent Successfully!']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regcomments= RegComment::all();
        return $regcomments;
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
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegComment  $regComment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regcomment = RegComment::find($id);
        if (!is_null($regcomment)) {
            return $regcomment;
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegComment  $regComment
     * @return \Illuminate\Http\Response
     */
    public function edit(RegComment $regComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegComment  $regComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegComment $regComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegComment  $regComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegComment $regComment)
    {
        //
    }
}
