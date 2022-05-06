<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentHistory;
use Carbon\Carbon;

class _PaymentHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paymenthistory = PaymentHistory::latest()->paginate(5);
        return view('pages.payment.index',compact('paymenthistory'))->with(request()->input('page'));
       // return view('course.index',compact('paymentHistory'))->with(request()->input('page'));
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
        'jamb_no' => 'required'
        
        ]);
// 'trxt_id','jamb_no','amount','date','status'


        
        if($request->jamb_no != ""){
            $tranx_id= $this->tranx_id_generator();
            $paymentHistory = new PaymentHistory;
            $paymentHistory->tranx_id = $tranx_id;
            $paymentHistory->jamb_no = $request->jamb_no;
            $paymentHistory->amount =  $request->amount;
            $paymentHistory->date =   Carbon::now()->toDateString();
            $paymentHistory->status =  $request->status;
            $paymentHistory->save();
        return redirect('/payment')->with('success','Payment Successfully Added!');
   
        }else{
            return  redirect('/payment')->with('error', 'Payment Not Added!');
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
        $paymentHistory = PaymentHistory::find($id);
        if (!is_null($paymentHistory)) {
            return $paymentHistory;
        }
    }

  
    public function update(Request $request)
    {
        $val=$request->validate([
            'tranx_id' => 'required',
        ]);
        if(!empty($val)){
            PaymentHistory::find($request->tranx_id)->update([
              'tranx_id' =>  $request->tranx_id,
              'jamb_no' => $request->jamb_no,
               'amount' => $request->amount,
               'date' =>   $request->date,
               'status' =>  $request->status
                               ]);
            return redirect('/payment')->with('success', 'Updated Successfully!');
        }else{
            return redirect('/payment')->with('error', 'Not Updated!');
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
            PaymentHistory::find($id)->delete();
            return response()->json(['success'=>'Deleted Successfully!']);
        }else{
            return response()->json(['error'=>'Not Deleted Successfully!']);
        }
    }

    protected function tranx_id_generator(){

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
