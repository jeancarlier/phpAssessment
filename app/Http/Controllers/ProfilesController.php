<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user){
        
        dd(User::find($user));
        dd($user);
        return view('profile');
    }
}
