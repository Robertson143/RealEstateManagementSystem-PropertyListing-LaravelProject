<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equity extends Model
{
    protected $table = 'equity';
    protected $fillable = [

        'paymentdate',
        'monthlypayment',
        'principal',
        'interest',
        'stats',

    ];
}
