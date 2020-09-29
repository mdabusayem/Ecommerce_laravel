<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Image;

class CategoryController extends Controller
{
    //
    public function index()
    {
    	$categories=Category::orderBy('id','desc')->get();
    	return view('admin.pages.category.index',compact('categories'));
    }
     public function create()
    {
    	return view('admin.pages.category.create');
    }
     public function manage_products()
    {
    	$products=Category::OrderBy('id','desc')->get();
    	return view('admin.pages.product.index')->with('products',$products);
    }

    public function edit($id)
    {
    	$category=Category::find($id);
    	return view('admin.pages.category.edit')->with('category',$category);
    }

    public function delete($id)
    {
    	//echo $id;exit();
    	$category=Category::find($id);
    	if(!is_null($category))
    	{
    		$category->delete();
    	}
    	session()->flash('success','Successfully Deleted');
    	return back();
    	//return view('admin.pages.product.edit')->with('product',$product);
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name'=>'required|max:150',
    		'category_image'=>'nullable|image',
    	],
    	[
    		'name.required'=>'Please provide a category name',
    		'category_image.image'=>'Please provide a image ',

    	]


    );

    		$image=$request->category_image;
    		$img=time().'.'.$image->getClientOriginalExtension();
    		$location=public_path('images/category/'.$img);

    		Image::make($image)->save($location);

    		
    		
    
    	$category=new Category;
    	$category->name=$request->name;
    	$category->description=$request->description;
    	$category->image=$img;
    	//print_r($product);exit();
    	$category->save();

    	

    	return redirect()->route('admin.categories');
    }

 public function update(Request $request,$id)
    {
    	$request->validate([
    		'name'=>'required|max:150',
    		'description'=>'required',
    		
    	]);



    	$category=Category::find($id);
    	$category->name=$request->name;
    	$category->description=$request->description;
    	
    	//print_r($product);exit();
    	$category->save();
    	

    	return redirect()->route('admin.categories');
    }
}
