<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function products()
    {
    	$products=Product::OrderBy('id','desc')->get();
    	return view('pages.product.index')->with('products',$products);
    }
}
