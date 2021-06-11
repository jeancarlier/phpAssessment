<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function create(){
        
        dd(User::find($user));
        dd($user);
        return view('profiles.create');
    }
}
