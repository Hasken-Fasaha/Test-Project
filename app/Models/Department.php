<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Department extends \Eloquent implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'departments';
    public $incrementing = false;
    protected $primaryKey = 'dept_id';
    protected $fillable = ['dept_name','dept_id','faculty_id',];
}
