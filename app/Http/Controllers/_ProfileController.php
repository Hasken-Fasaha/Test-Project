<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          
        $olevel_subjects=[
            'English Language',
            'Mathematics',
            'Physics',
            'Chemistry',
            'Biology',
            'Economics',
            'Geography',
            'Bussiness',
            'Accounting',
            'Civic Education',

        ];
          $olevel_grades=[
              'A1',
              'B2',
              'B3',
              'C4',
              'C5',
              'C6',
              

          ];
          
          $olevel_types=[
              'School Exams',
              'Private Exams'
          ];
          
         $olevel_bodies=[
             'NECO',
             'NABTEB',
             'NBAIS',
             'WAEC',
             'OTHERS',
         ];
          $olevel_years=[
           2011,
           2012,
           2013,
           2014,
           2015,
           2016,
           2017,
           2018,
           2019,
           2020,
           2021,
           2022,
           2023,
           2024,
           2025,

          ];
       //
       return view('pages.profile.index',compact('olevel_subjects','olevel_grades','olevel_types','olevel_bodies','olevel_years'));
  
    }

    public function paymentRedirect($student)
    {
       
           
         $olevel_subjects=[
             'English Language',
             'Mathematics',
             'Physics',
             'Chemistry',
             'Biology',
             'Economics',
             'Geography',
             'Bussiness',
             'Accounting',
             'Civic Education',

         ];
           $olevel_grades=[
               'A1',
               'B2',
               'B3',
               'C4',
               'C5',
               'C6',
               

           ];
           
           $olevel_types=[
               'School Exams',
               'Private Exams'
           ];
           
          $olevel_bodies=[
              'NECO',
              'NABTEB',
              'NBAIS',
              'WAEC',
              'OTHERS',
          ];
           $olevel_years=[
            2011,
            2012,
            2013,
            2014,
            2015,
            2016,
            2017,
            2018,
            2019,
            2020,
            2021,
            2022,
            2023,
            2024,
            2025,

           ];
        //
        return view('pages.profile.index',compact('$student','olevel_subjects','olevel_grades','olevel_types','olevel_bodies','olevel_years'));
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
