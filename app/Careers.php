<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $table = 'careers';
    protected $fillable = [
        'title', 'requirement1', 'requirement2','requirement3',
        'requirement4' , 'requirement5', 'requirement6','requirement7','requirement8',
        'requirement9','requirement10'
    ];
}
