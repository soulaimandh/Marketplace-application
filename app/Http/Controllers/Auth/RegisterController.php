<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "avatar" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'address' => 'string|max:255',
            'type' => 'required',
            'city' => 'required',
            'phone' => 'required|max:20|unique:users,phone|min:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     "avatar" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'name' => 'required|string|max:255',
        //     'address' => 'string|max:255',
        //     'type' => 'required',
        //     'city' => 'required',
        //     'phone' => 'required|max:20|unique:users,phone|min:10',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|string|confirmed|min:8',
        // ]);


        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withInput()
        //         ->withErrors($validator->errors());
        // }

        if ($request->avatar) {
            $avatar = UploadImage('uploads/users', $request->avatar);
        } else {
            $avatar = "";
        }
        $user = new  User();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->user_type = $request->type;
        $user->avatar = $avatar;
        $user->city = $request->city;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $this->guard()->login($user);
        $token = $user->createToken('auth_token')->plainTextToken;
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}
