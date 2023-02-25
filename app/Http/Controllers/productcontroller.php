<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        return view('product.product',['produk' => $product,"title" => "produk"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = product::all();
        $category = category::all();
        return view('product.create', ['produk' => $product,'kategori' => $category,"title"=>"produk"]);
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
            'img' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);

        $data = product::create($request->all());
                if($request->hasFile('img')){
                    $request->file('img')->move('blogs', $request->file('img')->getClientOriginalName());
                    $data->img = $request->file('img')->getClientOriginalName();
                    $data->save();
                }

        return redirect('/dashboard/product')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id,product $product)
    {
        $product = product::findOrFail($id);
        $category = category::all();
        return view('product.show', ['produk' => $product,'kategori' => $category,"title"=>"produk"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id, product $product)
    {
        $product = product::findOrFail($id);
        $category = category::all();
        return view('product.edit',compact(['product','category']),["title"=>"produk"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, product $product)
    {
        $product = product::findOrFail($id);
        $product->update($request->all());
        if($request->hasFile('img')){
            $request->file('img')->move('blogs', $request->file('img')->getClientOriginalName());
            $product->img = $request->file('img')->getClientOriginalName();
            $product->save();
        }

        return redirect('/dashboard/product')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, product $product)
    {
        $product = product::findOrFail($id);
        $product -> delete();

        return redirect('/dashboard/product')->with('success', 'Data Delete successfully');
    }

    public function export_excel()
	{
		return Excel::download(new ProductExport, 'product.xlsx');
	}
}
