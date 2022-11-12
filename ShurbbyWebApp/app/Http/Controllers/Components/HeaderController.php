<?php

namespace App\Http\Controllers\components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function profile(){
        return view('profile.index');
    }
}
