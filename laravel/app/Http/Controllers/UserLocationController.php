<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLocationController extends Controller
{
    public function index(){
        return view ('user_location');
    }
}
