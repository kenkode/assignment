<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Redirect;

class AdminController extends Controller
{
    //
    public function index(){
    	$products = Product::all();
    	return view('admin.index',compact('products'));
    }

    public function create(){
    	return view('admin.create');
    }

    public function store(Request $request){

        /*$validator = Validator::make($data = $request->all(), Foodcategory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/

    	$product = new Product;

        if ( $request->hasFile('image')) {

            $file = $request->file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $file = $file->move('images', $name);
            $input['file'] = '/images'.$name;
            $product->image = $name;
        }

		$product->name  = $request->name;
        $product->description  = $request->description;
        $product->price  = str_replace(',','',$request->price);
        

		$product->save();

        return Redirect::to('admin')->withFlashMessage('Product successfully added!');
	}

	public function show($id){
        $product = Product::find($id);
    	return view('admin.show',compact('product'));
    }

	public function edit($id){
        $product = Product::find($id);
        return view('admin.edit',compact('product'));
    }

    public function update(Request $request,$id){

        /*$validator = Validator::make($data = $request->all(), Foodcategory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/

    	$product = Product::find($id);

		if ( $request->hasFile('image')) {

            $file = $request->file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $file = $file->move('images', $name);
            $input['file'] = '/images'.$name;
            $product->image = $name;
        }

		$product->name  = $request->name;
        $product->description  = $request->description;
        $product->price  = str_replace(',','',$request->price);

		$product->update();

        return Redirect::to('admin')->withFlashMessage('Product successfully updated!');
	}

	public function destroy($id){
    	
		Product::destroy($id);

		return Redirect::to('admin')->withFlashMessage('Product successfully deleted!');
	
    }
}

