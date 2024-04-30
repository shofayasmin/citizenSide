<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Citizen;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $citizenExists = User::where('user_nik', $request['user_nik'])->exists();
        if($citizenExists){
            return back()->with('error', 'There is already an account with that nik.')->withInput();
        }

        $validatedData = $request->validate([
            'username' => 'required',
            'user_nik'  => ['required','exists:citizens,nik'],
            'role' => 'required',
            'password' => 'required',
        ]);
        
        User::create($validatedData);
        return redirect('/')->with('success', 'Registration Successful! Please Login to Continue');
    }
}
