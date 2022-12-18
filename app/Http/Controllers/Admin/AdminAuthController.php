<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'admin',
            ])) {
            return redirect()->intended('/');
        } 
  
        return redirect()->back()->withErrors([
            'cred_fail' => 'Login failed, please contact your supervisor.'
            ]);
    }
}