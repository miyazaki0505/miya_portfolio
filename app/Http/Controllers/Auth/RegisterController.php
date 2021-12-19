<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
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
    protected $redirectTo = '/';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'last_name' => ['required', 'string', 'max:16'],
            'first_name' => ['required', 'string', 'max:16'],
            'last_name_ruby' => ['required', 'string', 'max:16', 'regex:/^[あ-ん゛゜ぁ-ぉゃ-ょー]+$/u'],
            'first_name_ruby' => ['required', 'string', 'max:16', 'regex:/^[あ-ん゛゜ぁ-ぉゃ-ょー]+$/u'],
            'birth_year' => ['required', 'integer', 'between:1961,2021'],
            'birth_month' => ['required', 'integer', 'between:1,12'],
            'birth_day' => ['required', 'integer', 'between:1,31'],
            'email' => ['required', 'string', 'email', 'max:128', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'work_location' => ['required', 'integer', 'min:1'],
            'occupation' => ['required', 'integer', 'min:1'],
            'language' => ['required', 'integer', 'min:1'],
            'about_myself' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'last_name_ruby' => $data['last_name_ruby'],
            'first_name_ruby' => $data['first_name_ruby'],
            'birth_year' => $data['birth_year'],
            'birth_month' => $data['birth_month'],
            'birth_day' => $data['birth_day'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'work_location' => $data['work_location'],
            'occupation' => $data['occupation'],
            'language' => $data['language'],
            'about_myself' => $data['about_myself'],
        ]);
    }
}
