<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioData extends Model
{
    use HasFactory;

    protected $primaryKey='jamb_no';
    protected $keyType = 'string';


    protected $fillable = [
      'surname',
       'middlename',
        'firstname',
         'gender', 
         'jamb_no',
        'dob',
          'nationality',
          'address', 
          'state_id',
          'lga_id'
        ,'mstatus',
        'address',
        'phone_no',
        'email',
          
        'nok_name',
        'nok_phone_no',
        'nok_email',
        'sponsor_name',
        'sponsor_address',
        'sponsor_phone',
        'sponsor_email',
        'relationship',
        'school_name',
        'exam_type',
        'from',
          
        'to',
            'ssce',
        'faculty_id',
        'dept_id',
        'program_id',
        'mode_of_study',
        'course_duration',
        'sign',
          
        'passport',
        'approval',
        'reg_no',
        
        'status',
        
      ];

}
