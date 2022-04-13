<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'course_code';
    protected $table ='courses';

    protected $increasing = false;
    protected $keyType = 'string';

    protected $fillable =['course_code','course_title','credit_unit','program_id','semester','level'];


}
