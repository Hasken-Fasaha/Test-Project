<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuitionDetail extends Model
{
    use HasFactory;

    protected $table = 'tuition_details';
    protected $fillable = [
                            'program',
                            'session',
                            'registration_category',
                            'indigene_category',
                            'status'
                          ];

}