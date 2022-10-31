<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('homepage.home');
    }

    public function adminHome()
    {
        return view('homepage.adminHome');
    }
    
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
}
