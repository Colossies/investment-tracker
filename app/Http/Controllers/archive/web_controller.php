<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\publisher;
use App\Models\game_company;
use App\Models\game;
class web_controller extends Controller
{
    //
    public function traffic(Request $req, $page){
        $page = $req->page;
        $n = 10;
        $prev = 0;
        $next = 2;
        if($page == 'home'){
            return view('home');
        }
        else if($page == 'publishers'){
            $table = publisher::all()->take($n);
            return view('publishers', compact('table', 'prev', 'next'));
        }
        else if($page == 'game_companies'){
            $table = game_company::all()->take($n);
            return view('game_companies', compact('table', 'prev', 'next'));
        }
        else if($page == 'games'){
            $table = game::all()->take(10);
            return view('games', compact('table', 'prev', 'next'));
        }
    }

    public function table_pagination(Request $req, $page, $pagination){
        $page = $req->page;
        $pagination = $req->pagination;
        $n = 10;
        $prev = $pagination - 1;
        $next = $pagination + 1;
        if($page == 'publishers'){
            $table = publisher::all()->skip($n * ($pagination - 1))->take(10);
            return view('publishers', compact('table', 'prev', 'next'));
        }
        else if($page == 'game_companies'){
            $table = game_company::all()->skip($n * ($pagination - 1))->take(10);
            return view('game_companies', compact('table', 'next', 'prev'));
        }
        else if($page == 'games'){
            $table = game::all()->skip($n * ($pagination - 1))->take(10);
            return view('games', compact('table', 'next', 'prev'));
        }
    }

    public function home(){
        return view("home");
    }
}
