<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        $data = [
            'products' => $products,
        ];
        return view('home',$data);
    }

    public function create(){
        $categories = Category::all();
        $data = [
            'categories' => $categories,
        ];
        return view('create',$data);
    }

    public function edit($product_id){
        $categories = Category::all();
        $product = Product::find($product_id);
        $data = [
            'categories' => $categories,
            'product' => $product,
        ];
        return view('edit',$data);
    }

    public function login(){
        return view('login');
    }

    public function store(){
        $product = new Product();
        $product->product_name = request()->name; //name คือ ชื่อ name ในฟอร์มของเราที่ทำการส่งค่ามา
        $product->category_id = request()->category_id;
        $product->save();
        return redirect('/');
        //return request()->all();
    }
}
