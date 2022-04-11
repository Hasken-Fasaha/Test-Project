<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    protected $table ='courses';
  //  protected $primaryKey = 'course_code';
    protected $fillable =['course_code','course_title','credit_unit','program_id','semester','level'];


}
