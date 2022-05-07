<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $primaryKey = 'session_id';
    protected $table ='sessions';

    protected $increasing = false;
    protected $keyType = 'string';

    protected $fillable =['sesion_id','session_name'];
}
