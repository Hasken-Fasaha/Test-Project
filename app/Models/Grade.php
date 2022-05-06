<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $primaryKey = 'grade_id';
    public $incrementing = false;

    protected $table = 'grades';
    protected $fillable = [
                            'max', 
                            'min', 
                            'grade',
                            'grade_id'
                          ];
}
