<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\payment;


class PaymentController extends Controller
{
    public function getPayments($type)
    {
        switch ($type) {
            case 'daily':
                $payments = DB::table('payment')
                    ->select(DB::raw('datep as date, SUM(totale) as total'))
                    ->groupBy('datep')
                    ->get();
                break;
    
            case 'weekly':
                $payments = DB::table('payment')
                    ->select(DB::raw('YEAR(datep) as year, WEEK(datep) as week, SUM(totale) as total'))
                    ->groupBy('year', 'week')
                    ->get();
                break;
    
            case 'monthly':
                $payments = DB::table('payment')
                    ->select(DB::raw('YEAR(datep) as year, MONTH(datep) as month, SUM(totale) as total'))
                    ->groupBy('year', 'month')
                    ->get();
                break;
    
            case 'yearly':
                $payments = DB::table('payment')
                    ->select(DB::raw('YEAR(datep) as year, SUM(totale) as total'))
                    ->groupBy('year')
                    ->get();
                break;
    
            default:
                abort(404, 'Invalid type specified');
        }
    
        return view('wallet', [
            'payments' => $payments,
            'type' => $type 
        ]);
    }
}
