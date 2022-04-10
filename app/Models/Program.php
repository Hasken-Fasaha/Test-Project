<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Program extends \Eloquent implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'programs';
    public $incrementing = false;
    protected $primaryKey = 'program_id';
    protected $fillable = ['program_name','program_id','dept_id',];
}
