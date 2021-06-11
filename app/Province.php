<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
