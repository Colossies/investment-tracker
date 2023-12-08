<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\login as loginDB;
use Illuminate\Support\Facades\DB;
class login extends Controller
{
    //
    public function register(Request $req){
        // Check if account already exists
        $user = loginDB::where('username', $req->username)->first();
        
        if($user != null){
            error_log("record found");
            // User already exists
            return redirect()->route('register_fail');
        }

        if($req->username == null || $req->password == null){
            return redirect()->route('register_fail');
        }
        $acc = new loginDB();
        // username
        $acc->username = $req->username;
        // pass
        $acc->password = $req->password;
        $acc->save();

        // return app('App\Http\Controllers\Controller')->loginPage();
        return $this->loginSuccess($acc->id);
    }
    public function checkLogin(Request $req){
        $user = loginDB::where('username', $req->username)->first();
        
        if($user != null){
            if($user->password == $req->password){
                return $this->loginSuccess($user->id);
            }
            else{
                // Wrong password
                return redirect()->route('login_fail');
            }
        }
        else{
            // username not found
            return redirect()->route('login_fail');
        }
    }

    public function logout(Request $req){
        session()->flush();
        return redirect()->route('login');
    }

    private function loginSuccess($id){
        // create session and redirect
        Session::put('user_id', $id);
        // $user_id = $id;
        // return view("home", compact('user_id'));
        return redirect()->route('home');                                                      
    }
}
