<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShrubbyController extends Controller
{
    public function shrubbyrecommand()
    {
        return view('shrubby.shrubbyrecommand');
    }

    public function shrubbynewby()
    {
        return view('shrubby.shrubbynewby');
    }

    public function createShrubby()
    {
        return view('shrubby.shrubbycreate');
    }

    public function updateShrubby()
    {
        return view('shrubby.shrubbyupdate');
    }
    
    public function pageShrubby()
    {
        return view('shrubby.shrubbypage');
    }
}
