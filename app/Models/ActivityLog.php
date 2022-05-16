<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class ActivityLog extends \Eloquent implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'activity_logs';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','activity'];
}
