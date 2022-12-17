<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller {
    public function dashboard() {
        // IF USER NOT ALREADY LOGIN
        if(!Auth::check()){
            return redirect("login");
        }

        // FAVORITE
        $req = Http::get('https://api.jikan.moe/v4/top/manga?limit=6&filter=favorite')['data'];
        $response_json = json_encode($req);
        $toprated = json_decode($response_json, true);

        // POPULAR
        $req = Http::get('https://api.jikan.moe/v4/top/manga?limit=6&filter=bypopularity')['data'];
        $response_json = json_encode($req);
        $popular = json_decode($response_json, true);

        // LATEST
        $req = Http::get('https://api.jikan.moe/v4/seasons/now?limit=6')['data'];
        $response_json = json_encode($req);
        $latest = json_decode($response_json, true);

        $result = array(
            'toprated' => $toprated,
            'latest' => $latest,
            'popular' => $popular
        );

        return view('dashboard') -> with('result', $result);
    }

    public function popular() {
        // IF USER ALREADY LOGIN
        if(!Auth::check()){
            return redirect("login");
        }

        // POPULAR
        $req = Http::get('https://api.jikan.moe/v4/top/manga?filter=bypopularity')['data'];
        $response_json = json_encode($req);
        $popular = json_decode($response_json, true);

        $result = array(
            'popular' => $popular
        );

        return view('popular') -> with('result', $result);
    }

    public function latest() {
        // IF USER ALREADY LOGIN
        if(!Auth::check()){
            return redirect("login");
        }
        
        // LATEST
        $req = Http::get('https://api.jikan.moe/v4/seasons/now?')['data'];
        $response_json = json_encode($req);
        $latest = json_decode($response_json, true);

        $result = array(
            'latest' => $latest
        );

        return view('latest') -> with('result', $result);
    }

    public function detail(Request $request) {
        // IF USER ALREADY LOGIN
        if(!Auth::check()){
            return redirect("login");
        }

        $id = $request->query("id");

        $req = Http::get('https://api.jikan.moe/v4/manga/' . $id)['data'];
        $response_json = json_encode($req);
        $result = json_decode($response_json, true);

        return view('detailread') -> with('result', $result);
    }
}