<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the ration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function showRegistrationForm()
    // {
    //     return view('auth/register');
    // }
  
     /**
     * Write code on Method
     *
     * @return response()
     */
    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'alias' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telNum' => ['required', 'string' ,'size:12'],
            'address_info' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'date'],
            'gender' => ['required', 'string'],
            'username'=> ['required', 'string', 'max:255', 'unique:users']
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'alias' => $data['alias'],
            'email' => $data['email'],
            'is_admin' => '0',
            'password' => Hash::make($data['password']),
            'telNum' => $data['telNum'],
            'address_info' => $data['address_info'],
            'birthdate' => $data['birthdate'],
            'gender' => $data['gender'],
            'username' => $data['username'],
        ]);
    }
}
