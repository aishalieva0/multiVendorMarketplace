<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
//            'role_id'=>'1',
        ]);

        $credentials = $request->only('email', 'password','role_id');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    }

    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    protected function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required'],
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = '1';
        $user->save();

        auth()->guard('admin')->login($user);

        return redirect()->route('dashboard');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


}
