<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuitionDescription extends Model
{
    use HasFactory;

    protected $table = 'tuition_descriptions';
    protected $fillable = [
                            'tuition_id',
                            'item',
                            'amount'
                          ];

    public function tuition(){
        return $this->belongsTo(TuitionDetail::class, 'tuition_id');
    }
    
}