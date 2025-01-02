<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Transaction;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        $inTransactionTotal = $transactions->where('type', 'In')->map(function ($transaction) {
            return $transaction->quantity * $transaction->unit_price;
        })->sum();

        $outTransactionTotal = $transactions->where('type', 'Out')->map(function ($transaction) {
            return $transaction->quantity * $transaction->unit_price;
        })->sum();

        $differenceInOutTransaction = $outTransactionTotal - $inTransactionTotal;

        return view('welcome', compact('transactions', 'inTransactionTotal', 'outTransactionTotal', 'differenceInOutTransaction'));
    }

}
