<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityLog;

class ActivityLogController extends Controller
{
    public function activity(Request $request){
        $activitylog = new ActivityLog();
        $activitylog->activity =$request->activity;
        $activitylog->user_id =\Auth::user();
        $activitylog ->save();
       
    }

    public function index(){
        $activitylogs= ActivityLog::all();
        return view('pages.activity.index',compact('activitylogs'));
    }

    public function show($id)
    {
        $activitylog = ActivityLog::find($id);
        if (!is_null($activitylog)) {
            return $activitylog;
        }
    }

}
