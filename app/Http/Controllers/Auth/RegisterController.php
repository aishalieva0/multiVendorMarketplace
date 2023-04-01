<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $data = null;

        if ($request->input('role_id') == 2) {

            $vendor = $this->createVendor($request->all());
            event(new Registered($vendor));
            $this->guard('vendor')->login($vendor);

            $data = $vendor;
        }
        if ($request->input('role_id') == 3) {

            $user = $this->createUser($request->all());
            event(new Registered($user));
            $this->guard()->login($user);

            $data = $user;
        }

        return $this->registered($request, $data) ?: redirect($this->redirectPath());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
            'phone' => ['nullable'],
            'address' => ['nullable'],
            'city' => ['nullable'],
        ]);
    }

    protected function createVendor(array $data)
    {
        return Vendor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'city' => $data['city'],
            'role_id' => $data['role_id'],
        ]);
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => $data['role_id'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $user)
    {
        // This method will be called after the user is successfully registered
        return redirect()->route('home');
    }
}
