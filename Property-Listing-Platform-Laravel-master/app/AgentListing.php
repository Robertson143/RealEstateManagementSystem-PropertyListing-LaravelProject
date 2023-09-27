<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentListing extends Model
{
    protected $table = 'agentlistings';
    protected $fillable = [
        'title','description', 'price', 'square_feet','lot_size',
        'bedroom','bathroom','garage','city','country', 'thumbnail_0','thumbnail_1',
        'thumbnail_2','thumbnail_3','thumbnail_4',
        'thumbnail_5','thumbnail_6','realtor_id','is_published'
    ];
}
