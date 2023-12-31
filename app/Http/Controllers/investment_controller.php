<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\investment;
use App\Models\summary;
use config\logging as Log;
use Carbon;
class investment_controller extends Controller
{

    public function post(Request $req){
        $userId = $req->session()->get('user_id');

        if($userId == null) return redirect()->route('login');
        $validation = $req->validate([
            'name' => 'required',
            'type' => 'required',
            'action' => 'required',
            'amount' => 'required',
            'unit' => 'required',
            'price_unit' => 'required',
            'fee' => 'required'
        ]);

        $unit = 0;
        $amount = 0;
        $req->fee = $req->fee / 100;
        if($req->amount_mode == "money"){
            $unit = $req->amount / $req->price_unit;
            $amount = $req->amount;
        }
        else if($req->amount_mode == "unit"){
            $unit = $req->amount;
            $amount = $req->amount * $req->price_unit;
        }

        if($req->action == "buy"){

            
            $investment = new investment();
            $investment->login_id = $userId;
            $investment->name = $req->name;
            $investment->investment_type = $req->type;
            $investment->action = $req->action;
            $investment->amount = $amount;
            $investment->units = $unit;
            $investment->price_unit = $req->price_unit;
            $investment->fee = $req->fee;
            $investment->amount_spent = (1 + $req->fee) * $amount;
            $investment->save();
            

            // Check if the record exists
            $record = summary::where('name', $req->name)->first();
            if($record != null){
                error_log("record found");
                $curr_time = Carbon\Carbon::now();
                $curr_time->toDateTimeString();
                $record->update([
                    'value' => $record->value + $amount,
                    'units' => $record->units + $unit,
                    'value_unit' => ($record->value / $record->units),
                    'amount_spent' => $record->amount_spent + ((1 + $req->fee) * $amount),
                    'updated_at' => $curr_time
                ]);
            }
            else{
                // Log::debug("record not found");
                $summary = new summary();
                $summary->login_id = $userId;
                $summary->name = $req->name;   
                $summary->investment_type = $req->type;
                $summary->value = $amount;
                $summary->units = $unit;
                $summary->value_unit = ($summary->value / $summary->units);
                $summary->amount_spent = (($req->fee + 1) * $amount);
                $summary->save();
            }
        }
        else if($req->action == "sell"){
            $userId = $req->session()->get('user_id');

            $investment = new investment();
            $investment->login_id = $userId;
            $investment->name = $req->name;
            $investment->investment_type = $req->type;
            $investment->action = $req->action;
            $investment->amount = $amount;
            $investment->units = $unit;
            $investment->price_unit = $req->price_unit;
            $investment->fee = $req->fee;
            $investment->amount_spent = (1 + $req->fee) * $amount;
            $investment->save();


            // look if the record already exists
            $record = summary::where('name', $req->name)->first();
            if($record){
                $record->update([
                    'value' => $record->value - $amount,
                    'units' => $record->units - $unit,
                    'value_unit' => ($record->value / $record->unit),
                    'amount_spent' => $record->amount_spent + ((1 + $req->fee) * $amount)
                ]);
            }
            else{
                // Cannot sell what doesn't exist...
            }

            
        }

        return redirect()->route('invest');
    }

    public function getLog(){
        $investment = investment::all();
        return $investment;
    }

    public function getSummary(){
        $summary = summary::all();
        return $summary;
    }
}
