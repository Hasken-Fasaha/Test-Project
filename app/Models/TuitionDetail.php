<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuitionDetail extends Model
{
    use HasFactory;

    protected $table = 'tuition_details';
    protected $fillable = [
                            'program_id',
                            'session',
                            'fr_or_re_or_fo',
                            'in_or_ni_or_nr',
                            'status'
                          ];


    public function programme(){
        return $this->belongsTo(Program::class, 'program_id');
    }
    
}