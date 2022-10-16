<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signin;

class SigninController extends Controller
{
    //
    public function index(){
        return view('homepage.signin');
    }
}
