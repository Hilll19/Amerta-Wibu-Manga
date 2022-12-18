<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in success');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

      
    public function processRegister(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();

        // If the password and confirm password is not the same, just dont proceed
        if($data['password'] !== $data['confirm_password']) {
            return redirect()->back()->withErrors([
                'pass_not_match' => 'Password and confirm password not match'
              ]);
        };

        $check = $this->create($data);
         
        return redirect("/")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'role' => "user",

        // PASSWORD HASHING
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}