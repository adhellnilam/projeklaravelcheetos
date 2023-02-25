<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\product;
use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;

class landingController extends Controller
{
    public function landingpage()
    {
        return view('layouts.app', ["title"=>"landing"]);
    }

    public function home()
    {
        return view('landing.home', ["title"=>"home"]);
    }

    public function about()
    {
        return view('landing.about', ["title"=>"about"]);
    }

    public function contact()
    {
        return view('landing.contact', ["title"=>"contact"]);
    }

    public function product()
    {
        return view('landing.product', ["title"=>"product"]);
    }

    public function transaction()
    {
        $product = product::all();
        $payment = payment::all();
        $transaction = transaction::all();

        return view('landing.transaction', ['product' => $product,'payment' => $payment,'transaction' => $transaction,"title"=>"transaction"]);
    }

    public function transactionStore(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'address' => 'required',
            'name' => 'required',
            'quantity' => 'required',
            'payment_id' => 'required'
        ]);

        $input = $request->all();
        transaction::create($input);

        return redirect('/home')->with('success', 'Transaction Successfully');
    }
}
