<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function getFormLogin(){
        return view('Auth.form-login');
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
    public function getFormRegister()
    {
        return view('Auth.form-register');
    }

    public function register(RegisterRequest $request){
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $dataShow = User::create($data);
        if($dataShow){
            return view('Auth.form-login');
        }
        return redirect()->back()->with([
            'message' => 'Dang ky that bai'
        ]);
    }
    public function logOut(){
        Auth::logout();
        return view('Auth.form-login');
    }
}