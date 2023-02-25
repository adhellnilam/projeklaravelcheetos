<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Exports\CategoryExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 

class CategoryController extends Controller
{
    public function index()
	{
		$category = category::all();
		return view('siswa',['siswa'=>$siswa]);
	}
 
	public function export_excel()
	{
		return Excel::download(new CategoryExport, 'category.xlsx');
	}
}
