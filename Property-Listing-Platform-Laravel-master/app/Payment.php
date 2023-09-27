<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $fillable = [
        'name',
        'address',
        'unit',
        'price',
        'phase',
        'unitnumber',
        'street',
        'bank',
        'block',
        'downpayment',
        'reservation',
        'balance',
        'monthly',
        'status',
        'popular',
        'checklist1',
        'checklist2',
        'checklist3',
        'checklist4',
        'checklist5',
        'checklist6',
        'checklist7',
        'checklist8',
        'checklist9',
        'checklist10',
        'tax',
        'contract',
        'total',
    
    ];

}