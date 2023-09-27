<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'title','description', 'price', 'available', 'phase', 'street', 'block', 'unit1', 'unit2', 'unit3', 'unit4', 'unit5', 'unit6', 'unit7', 'unit8', 'square_feet','lot_size',
        'bedroom', 'garage', 'bathroom', 'porch', 'living', 'kitchen', 'dining', 'den', 'toilet', 'bedarea', 'garagearea', 'city','country', 'thumbnail_0','thumbnail_1',
        'thumbnail_2','thumbnail_3','thumbnail_4',
        'thumbnail_5','thumbnail_6','checklist1', 'checklist2', 'checklist3', 'checklist4', 'checklist5', 'checklist6',
        'checklist7', 'checklist8', 'checklist9', 'checklist10', 'checklist11', 'checklist12', 'checklist13', 'checklist14', 'checklist15', 'checklist16',
        'checklist17', 'checklist18', 'realtor_id','is_published'
    ];
    
    public function realtor(){

    return $this->belongsTo(Realtor::class);
    }

}
