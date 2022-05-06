<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Faculty extends \Eloquent implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'faculties';
    public $incrementing = false;
    protected $primaryKey = 'faculty_id';
    protected $fillable = ['faculty_name','faculty_id',];
}
