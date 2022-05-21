<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Facades\Storage;

class _BioDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('bio_data.index');
    }
    public function get_students_biodata(){
        $students_biodata= Biodata::latest()->paginate(5);
        return view('pages.biodata.index',compact('students_biodata'));
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
            'jamb_no' => 'required',
        ]);
        if(!empty($val)){
            Biodata::find($request->jamb_no)->update([
                
                    'surname'=>$request->surname,
                 'middlename'=>$request->middlename,
                  'firstname'=>$request->firstname,
                      'gender'=>$request->gender, 
                         'dob'=>$request->dob,
                 'nationality'=>$request->nationality, 
                     'address'=>$request->address,
                    'state_id'=>$request->state_id,
                      'lga_id'=>$request->lga_id,
                      'mstatus'=>$request->mstatus,
                      'address'=>$request->address,
                      'phone_no'=>$request->phone_no,
                        'email'=>$request->email,
                 
                     'nok_name'=>$request->nok_name,
                    'nok_phone_no'=>$request->nok_phone_no,
                     'nok_email'=>$request->nok_email,
                    'sponsor_name'=>$request->sponsor_name,
                    'sponsor_address'=>$request->sponsor_address,
                     'sponsor_phone'=>$request->sponsor_phone,
                    'sponsor_email'=>$request->sponsor_email,
                    'relationship'=>$request->relationship,
                     'school_name'=>$request->school_name,
                     'exam_type'=>$request->exam_type,
                      'from'   => $request->from,      
                  
                  'to'=> $request->to,
                    
                'faculty_id'=> $request->faculty_id,
                'dept_id'=> $request->dept_id,
                'program_id'=> $request->program_id,
                'mode_of_study'=> $request->mode_of_study,
                'course_duration'=> $request->course_duration,
                'sign'=> $request->sign,
                  
                'passport'=>$request->passport,
                'approval'=>$request->approval,
                'reg_no'=>$request->reg_no,
                
                'status'=>$request->status,
                                        
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
            Biodata::find($id)->delete();
            return response()->json(['success'=>'Deleted Successfully!']);
        }else{
            return response()->json(['error'=>'Not Deleted Successfully!']);
        }
    }

    protected function jamb_id_generator(){

        $length=5;
        $key='';
        $alph=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2);
        $keys = range(0,9);
        for($i=0;$i<$length;$i++){
            $key .=$keys[array_rand($keys)];
        }
        return $key.$alph; 
      }


      function generateJson(Request $request){
        $olevel = array (

            array($request->subject1,$request->grade1,$request->body1,$request->type1,$request->year1,$request->exam_no1),
            array($request->subject2,$request->grade2,$request->body2,$request->type2,$request->year2,$request->exam_no2),
            array($request->subject3,$request->grade3,$request->body3,$request->type3,$request->year3,$request->exam_no3),
            array($request->subject4,$request->grade4,$request->body4,$request->type4,$request->year4,$request->exam_no4),
            array($request->subject5,$request->grade5,$request->body5,$request->type5,$request->year5,$request->exam_no5),
            array($request->subject6,$request->grade6,$request->body6,$request->type6,$request->year6,$request->exam_no6),
            array($request->subject7,$request->grade7,$request->body7,$request->type7,$request->year7,$request->exam_no7),
            array($request->subject8,$request->grade8,$request->body8,$request->type8,$request->year8,$request->exam_no8),
            array($request->subject9,$request->grade9,$request->body9,$request->type9,$request->year9,$request->exam_no9),


          );

        //   dd(json_encode($olevel));
          return json_encode($olevel);
      }

      public function store(Request $request)
      {
         
     
          //dd(generateJson());
           

          $olevel = array (

            array($request->subject1,$request->grade1,$request->body1,$request->type1,$request->year1,$request->exam_no1),
            array($request->subject2,$request->grade2,$request->body2,$request->type2,$request->year2,$request->exam_no2),
            array($request->subject3,$request->grade3,$request->body3,$request->type3,$request->year3,$request->exam_no3),
            array($request->subject4,$request->grade4,$request->body4,$request->type4,$request->year4,$request->exam_no4),
            array($request->subject5,$request->grade5,$request->body5,$request->type5,$request->year5,$request->exam_no5),
            array($request->subject6,$request->grade6,$request->body6,$request->type6,$request->year6,$request->exam_no6),
            array($request->subject7,$request->grade7,$request->body7,$request->type7,$request->year7,$request->exam_no7),
            array($request->subject8,$request->grade8,$request->body8,$request->type8,$request->year8,$request->exam_no8),
            array($request->subject9,$request->grade9,$request->body9,$request->type9,$request->year9,$request->exam_no9),


          );

        //   dd(json_encode($olevel));
          $oleveljson=json_encode($olevel);
        
           if($request->surname != ""){
               $biodata = new Biodata;
                 
                 try{
                   // $path = $request->file('imagepath')->store('public/assets/images/students');
                    //$path = $request->file('imagepath')->store('assets');
                    $destination_path = 'public/assets/images/students';
                    $image=  $request->file('olevel_result');
                    $image_name=  $image->getClientOriginalName();
                    $path =  $request->file('imagepath')->storeAs($destination_path,$image_name);

                    $oleve_destination_path = 'public/assets/images/olevels';
                    $olevel_image=  $request->file('imagepath');

                    $olevel_image_name=  $image->getClientOriginalName();
                    $olevel_path =  $request->file('imagepath')->storeAs($destination_path,$image_name);



                  
                   // $path = Storage::putFile('public', $request->file('imagepath'));
                   // dd($path);
                 }
                 catch(Exception $e){
                        dd($e);
                 }
               $jambId= $this->jamb_id_generator();
               $olevelArr=[];

              
               $biodata->jamb_no = $jambId;
               $biodata->surname = $request->surname;
               $biodata->middlename=$request->middlename;
               $biodata->firstname=$request->firstname;
               $biodata->gender=$request->gender; 
               $biodata-> dob=$request->dob;
               $biodata->nationality =$request->nationality; 
               $biodata->address =$request->address;
               $biodata->state_id =$request->state_id;
               $biodata-> lga_id =$request->lga_id;
               $biodata->mstatus =$request->mstatus;
               $biodata->address =$request->address;
               $biodata->phone_no =$request->phone_no;
               $biodata->email =$request->email;
               
               $biodata->nok_name =$request->nok_name;
               $biodata->nok_phone_no=$request->nok_phone_no;
               $biodata->nok_email =$request->nok_email;
               $biodata->sponsor_name =$request->sponsor_name;
               $biodata->sponsor_address =$request->sponsor_address;
               $biodata->sponsor_phone_no =$request->sponsor_phone_no;
               $biodata->sponsor_email =$request->sponsor_email;
               $biodata->relationship =$request->relationship;
               $biodata->school_name =$request->school_name;
               $biodata->exam_type =$request->exam_type;
               $biodata->from = $request->from; 
               $biodata->imagepath= $path;  
               
               
               $biodata->ssce = $oleveljson;
               $biodata->to = $request->to;
                  
               $biodata->faculty_id = $request->faculty_id;
               $biodata->dept_id = $request->dept_id;
               $biodata->program_id = $request->program_id;
               $biodata->mode_of_study= $request->mode_of_study;
               $biodata->course_duration = $request->course_duration;
               $biodata->sign= $request->sign;
                
               $biodata->passport=$request->passport;
               $biodata->approval=$request->approval;
               $biodata->reg_no =$request->reg_no;
              
               $biodata->status=$request->status;
               $biodata->save();
               
           return redirect('/dashboard')->with('success','Biodata Successfully Added!');
      
           }else{
               return  redirect('/dashboard')->with('error', 'Biodata Not Added!');
           }
           
          
   
    }
}
