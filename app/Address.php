<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addressType(){
        return $this->hasOne(AddressType::class);
    }
}
