<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function provinces(){
        return $this->hasMany(Province::class);
    }
}
