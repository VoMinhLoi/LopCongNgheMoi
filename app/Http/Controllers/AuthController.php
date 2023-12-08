<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function get_form_login(){
        return view('form-login');
    }

    // public function login(AuthRequest $request){
    //     if(Auth::attempt($request->validated())){
    //         $request->session()->regenerate();
    //         return redirect()->route('customers.index');
    //     }
    //     return redirect()->back()->with([
    //         'Message' => 'Sai tai khoan hoac mat khau'
    //     ]);
    // }

    
    public function login(AuthRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
 
            return redirect()->route('customers.index');
        }

        return redirect()->back()->with([
            'fail' => 'Sai password hoac email'
        ]);
    }
}
