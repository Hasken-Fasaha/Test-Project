<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $table = 'admissions';
    protected $fillable = [
        'first_name',
        'surname',
        'other_names',
        'jamb_no',
        'email',
        'jamb_score',
        'dob',
        'program_id',
        'date_of_admission',
        'registration_deadline',
    ];

    public function programme()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
