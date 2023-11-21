<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\investment;
use App\Models\summary;
use config\logging as Log;
class investment_controller extends Controller
{

    public function post(Request $req){
        // name
        // type
        // amount
        // price-unit
        // fee
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

        if($req->mode == "buy"){
            error_log("mode: buy");
            $summary = new summary();
            $summary->name = $req->name;   
                // $summary->investment_type = $req->type;
                // $summary->value = $amount;
                $summary->units = $req->unit;
                $summary->value_unit = ($summary->value / $summary->unit);
                $summary->amount_spent = $summary->amount_spent + ($req->fee * $amount);
                $summary->save();

            // $investment = new investment();
            // $investment->name = $req->name;
            // $investment->investment_type = $req->type;
            // $investment->action = $req->action;
            // $investment->amount = $amount;
            // $investment->units = $unit;
            // $investment->price_unit = $req->price_unit;
            // $investment->fee = $req->fee;
            // $investment->amount_spent = (1 + $req->fee) * $amount;
            // $investment->save();
            // $investment = new investment();
            // $investment->insert([
            //     'name' => $req->name,
            //     'investment_type' => $req->type,
            //     'action' => $req->action,
            //     'amount' => $amount,
            //     'units' => $unit,
            //     'price_unit' => $req->price_unit,
            //     'fee' => $req->fee,
            //     'amount_spent' => (1 + $req->fee) * $amount
            // ]);
            

            // Check if the record exists
            $record = summary::where('name', $req->name)->first();
            if($record != null){
                error_log("record found");
                $record->update([
                    'value' => $record->value + $amount,
                    'units' => $record->units + $unit,
                    'value_unit' => ($record->value / $record->unit),
                    'amount_spent' => $record->amount_spent + ((1 + $req->fee) * $amount)
                ]);
            }
            else{
                // Log::debug("record not found");
                $summary = new summary();
                $summary->name = $req->name;   
                $summary->investment_type = $req->type;
                $summary->value = $amount;
                $summary->units = $req->unit;
                $summary->value_unit = ($summary->value / $summary->unit);
                $summary->amount_spent = $summary->amount_spent + ($req->fee * $amount);
                $summary->save();
            }
        }
        else if($req->mode = "sell"){
            $investment = new investment();
            // $investment->name = $req->name;
            // $investment->investment_type = $req->type;
            // $investment->action = $req->action;
            // $investment->amount = $amount;
            // $investment->units = $unit;
            // $investment->price_unit = $req->price_unit;
            // $investment->fee = $req->fee;
            // $investment->amount_spent = (1 + $req->fee) * $amount;
            
            $investment->insert([
                'name' => $req->name,
                'investment_type' => $req->type,
                'action' => $req->action,
                'amount' => $amount,
                'units' => $unit,
                'price_unit' => $req->price_unit,
                'fee' => $req->fee,
                'amount_spent' => (1 + $req->fee) * $amount
            ]);


            // $table->string('name', 64);
            // $table->string('investment-type', 64);s
            // $table->float('value');
            // $table->float('value-unit');
            // $table->float('units');
            // $table->float('fee');
            // $table->float('amount-spent');
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

            // $investment->save();
        }
    }


}
