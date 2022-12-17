<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

    public function index() {
        // IF USER NOT LOGIN
        if(!Auth::check()){
            return redirect("login");
        }

        $user = Auth::user();
        return view('profile')->with('user', $user);
    }
}