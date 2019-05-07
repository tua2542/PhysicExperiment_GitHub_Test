<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class telNumber extends Model
{
    protected $table = "telNumber";

    protected $fillable = [
        'telNumber'
    ];

    public $timestamps = false;
}
