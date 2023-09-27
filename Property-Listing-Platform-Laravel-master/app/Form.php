<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'zip', 'source', 'income', 'fee', 'contact_number','description','listing_id','user_id'

    ];

    public function listing(){

    return $this->belongsTo(Listing::class);
    }

    public function user(){

    return $this->belongsTo(User::class);
    }
}