<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class _SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $sessions= Session::all();
        return view('pages.session.index',compact('sessions'));
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
        $val=$request->validate([
            'session_name' => 'required',
        ]);
        if(!empty($val)){

            $session_id =  substr($request->session_name,0,3)."-".$this->session_id_generator();
       
                if($request->session_name != ""){
                    $session = new Session();
                    $session->session_name =$request->session_name;
                    $session->session_id =$session_id;
                    $session ->save();
                    return redirect('/session')->with('success', 'Session Successfully Added!');
                }else{
                    return  redirect('/session')->with('error', 'Session Not Added!');
                }
        }
        else{
            return  redirect('/session')->with('error', 'session Already Exist!');
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

    protected function session_id_generator(){

        $length=5;
        $key='';
        $alph=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2);
        $keys = range(0,9);
        for($i=0;$i<$length;$i++){
            $key .=$keys[array_rand($keys)];
        }
        return $key.$alph;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $session = Session::find($id);
        if (!is_null($session)) {
            return $session;
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
            'session_name' => 'required',
        ]);
        if(!empty($val)){
            Session::find($request->session_id)->update([
                'session_name' => $request->session_name,
                ]);
            return redirect('/session')->with('success', 'Updated Successfully!');
        }else{
            return redirect('/session')->with('error', 'Not Updated!');
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
            Session::find($id)->delete();
            return response()->json(['success'=>'Deleted Successfully!']);
        }else{
            return response()->json(['error'=>'Not Deleted Successfully!']);
        }
    }
}
