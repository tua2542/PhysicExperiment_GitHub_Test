<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = "transaction";

    protected $fillable = [
        'cardNumber', 'typeOfpayment', 'expired', 'CVV'
    ];

    public $timestamps = false;
}

