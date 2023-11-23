<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
	public function register()
	{
		return view('auth.register');
	}

	public function registerSimpan(Request $request)
{
    Validator::make($request->all(), [
        'nama' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
		'level' => 'required'

		
    ])->validate();

	try {
        // Attempt to create a new user
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'level' => $request->level,
            'password' => Hash::make($request->password)
        ]);

        // Attempt to create a new Pengguna
        Pengguna::create([
            'nama_lengkap' => $request->nama,
            'alamat' => $request->alamat,
            'alamat_email' => $request->email,
            'connum' => $request->countryCode,
            'nomor_telepon' => $request->nomor_telepon
        ]);

        // Flash success message
        Session::flash('success', 'Registration successful!');
		//sleep(2);
        //return redirect()->route('login');
		return redirect()->back();


    } catch (\Exception $e) {
        // Flash error message
        Session::flash('error', 'Registration failed. Please try again.');

        // Log the exception for debugging purposes
        //Log::error($e);

        return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.']);
		;
    }
}

	public function login()
	{
		return view('auth.login');
	}

	public function loginAksi(Request $request)
{
    Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required'
    ])->validate();

    if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);
    }

    $user = Auth::user();
    //dd($user->level);
    // Check the user's level and redirect accordingly
    if ($user->level === 'staff') {
        return redirect()->route('staff.dashboard');    
    } elseif ($user->level === 'bank') {
        return redirect()->route('bank.dashboard');
    } else {
        // Handle other user levels or provide a default redirect
        return redirect()->route('dashboard');
    }
}


	public function logout(Request $request)
	{
		Auth::guard('web')->logout();

		$request->session()->invalidate();

		return view('auth.login');
	}
}