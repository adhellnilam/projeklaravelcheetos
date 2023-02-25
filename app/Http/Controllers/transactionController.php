<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\product;
use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;

class transactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = transaction::all();
        return view('transaction.transaction',['transaction' => $transaction,"title" => "transaction"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = product::all();
        $payment = payment::all();
        $transaction = transaction::all();

        return view('transaction.create', ['product' => $product,'payment' => $payment,'transaction' => $transaction,"title"=>"transaction"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'address' => 'required',
            'name' => 'required',
            'quantity' => 'required',
            'payment_id' => 'required',
        ]);

        $input = $request->all();
        transaction::create($input);

        return redirect('/dashboard/transaction')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id, transaction $transaction)
    {
        $transaction = transaction::findOrFail($id);
        $product = product::all();
        $payment = payment::all();

        return view('transaction.show', ['product' => $product,'payment' => $payment,'transaction' => $transaction,"title"=>"transaction"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id, transaction $transaction)
    {
        $transaction = transaction::findOrFail($id);
        $product = product::all();
        $payment = payment::all();

        return view('transaction.edit',compact(['payment','product','transaction']),["title"=>"produk"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, transaction $transaction)
    {
        $transaction = transaction::findOrFail($id);
        $transaction->update($request->all());

        return redirect('/dashboard/transaction')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, transaction $transaction)
    {
        $transaction = transaction::findOrFail($id);
        $transaction -> delete();

        return redirect('/dashboard/transaction')->with('success', 'Data Delete successfully');
    }

    public function exportexcel()
	{
		return Excel::download(new TransactionExport, 'transaction.xlsx');
	}
}
