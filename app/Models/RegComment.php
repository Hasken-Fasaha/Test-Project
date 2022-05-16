<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class RegComment extends \Eloquent implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'reg_comments';
    protected $primaryKey = 'id';
    protected $fillable = ['staff_id','student_id','activity'];
}
