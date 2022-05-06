<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;


        protected $primaryKey = 'trxt_id';
        protected $table ='payment_histories';
    
        protected $increasing = false;
        protected $keyType = 'string';
    
        protected $fillable =['trxt_id','jamb_no','amount','date','status'];
}
