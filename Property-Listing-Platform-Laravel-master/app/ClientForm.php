<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientForm extends Model
{
    protected $table = 'clientform';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
        'birthday',
        'phase',
        'street',
        'block',
        'unitnumber',
        'price',
        'unit',
        'income',
        'stats',
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
    ];

    public function listing(){

        return $this->belongsTo(Listing::class);
        }
    
        public function user(){
    
        return $this->belongsTo(User::class);
        }
    }

