<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\summary;
use App\Models\investment;
use App\Models\login;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(Request $req){
        $user_id = $req->session()->get('user_id');
        if($req->session()->get('user_id') == null){
            return redirect()->route('login');
        }
        $user = Login::where('id', $user_id)->first();
        return view("home", compact('user_id', 'user'));
    }


    public function invest(Request $req){
        $user_id = $req->session()->get('user_id');
        if($req->session()->get('user_id') == null){
            return redirect()->route('login');
        }

        $investment = investment::take(10);
        return view("invest", compact('user_id'));
    }

    public function summary(Request $req){
        $user_id = $req->session()->get('user_id');
        if($req->session()->get('user_id') == null){
            return redirect()->route('login');
        }

        $curr_page = $req->page ?? 1;
        $n = 15;
        $summary = Login::find($user_id)->summary->skip(($curr_page - 1) * $n)->take($n);
        $summaryNext = Login::find($user_id)->summary->skip(($curr_page) * $n)->take($n);
        $next = 0;
        if($summaryNext == null) $next = 1;
        return view("summary", compact('summary', 'curr_page', 'user_id', 'next'));

        
    }

    public function log(Request $req){
        $user_id = $req->session()->get('user_id');
        if($req->session()->get('user_id') == null){
            return redirect()->route('login');
        }

        $curr_page = $req->page ?? 1;
        $n = 15;

        $investment = Login::find($user_id)->investment->skip(($curr_page - 1) * $n)->take($n);
        $next = 0;
        $investmentNext = Login::find($user_id)->investment->skip(($curr_page) * $n)->take($n);
        if($investmentNext == null) $next = 1;
        return view("log", compact('investment', 'curr_page', 'user_id', 'next'));

    }

    public function loginPage(Request $req){
        $user_id = $req->session()->get('user_id');
        if($user_id != null){
            return redirect()->route('home');
        }
        return view("login", compact('user_id'));
    }

    public function registerPage(Request $req){
        $user_id = $req->session()->get('user_id');
        if($user_id != null){
            return redirect()->route('home');
        }
        return view("register", compact('user_id'));
    }
}
