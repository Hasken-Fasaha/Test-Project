<?php

namespace App\Http\Controllers;

use App\Models\ExtraInfo;
use Illuminate\Http\Request;

class ExtraInfoController extends Controller
{
    public function extraInfo(Request $request){
        $extrainfo = new ExtraInfo();
        $extrainfo->info =$request->info;
        $extrainfo->student_id =$request->student_id;
        $extrainfo->type =$request->type;
        $extrainfo ->save();
        return response()->json(['success'=>'Extra Info added Successfully!']);
    }
    public function index()
    {
        $extrainfos= ExtraInfo::all();
        return $extrainfos;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExtraInfo  $extraInfo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extrainfo = ExtraInfo::find($id);
        if (!is_null($extrainfos)) {
            return $extrainfos;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExtraInfo  $extraInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ExtraInfo $extraInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExtraInfo  $extraInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtraInfo $extraInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExtraInfo  $extraInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtraInfo $extraInfo)
    {
        //
    }
}
