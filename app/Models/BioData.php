<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioData extends Model
{
    use HasFactory;

    protected $table = 'bio_data';
    protected $fillable = ['surname', 'middlename', 'firstname', 'gender', 
                            'dob', 'nationality', 'address', 'state_id', 'lga_id'
                          ];

}
