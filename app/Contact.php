<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function contactType(){
        return $this.hasMany(ContactType::class);
    }
}
