<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\game;
class form_controller extends Controller
{
    //
    public function index(){
        return view("form");
    }

    public function add(Request $req){
        // This worked
        // to take things from $req just go $req->[the thing]
        $game = new game();
        $game->id = 123;
        $game->game_company_id = 1;
        $game->name = "asd";
        $game->save();
        dump($req->all());
    }
}
