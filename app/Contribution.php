<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $table = 'contribution';
    protected $fillable = [
        'pohon', 'kg', 'kwh','rumah','ltr'
    ];
}
