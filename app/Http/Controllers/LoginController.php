<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::user()){
            return redirect()->route('dashboard');
        }else{
            return view('login');
        }
    }

    public function login(Request $request)
    {
        // validasi data
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        try {
            $akun = $request->only('username', 'password');
            if (Auth::attempt($akun)) {
                if(Auth::user()->role == 'ADMIN'){
                    return redirect()->route('adm.dashboardadmin');
                }else{
                    if(session('link')){
                        return redirect(session('link'));
                    }
                    return redirect('/');
                }
            } else {
                return redirect()->route('login')->with(['error' => 'Wrong username or password!']);
            }
        } catch (QueryException $e) {
            // return response()->json([
            //     'message' => "Failed " . $e->errorInfo
            // ]);
            return redirect()->route('login')->with(['error' => $e->errorInfo]);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        // Validasi
        $request->validate([
            'name' =>  'required',
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user_id = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'USER'
        ]);
        Auth::loginUsingId($user_id);
        if(session('link')){
            return redirect(session('link'));
        }
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
