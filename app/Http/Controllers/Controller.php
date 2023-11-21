<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\summary;
use App\Models\investment;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        return view("home");
    }


    public function invest(){
        $investment = investment::take(10);
        return view("invest");
    }

    public function summary(Request $req){
        $curr_page = $req->page ?? 1;
        $n = 10;
        $summary = summary::all()->skip(($curr_page - 1) * $n)->take($n);
        return view("summary", compact('summary', 'curr_page'));
    }

    public function log(Request $req){
        $curr_page = $req->page ?? 1;
        $n = 10;
        $investment = investment::all()->skip(($curr_page - 1) * $n)->take($n);
        return view("log", compact('investment', 'curr_page'));
    }
}
