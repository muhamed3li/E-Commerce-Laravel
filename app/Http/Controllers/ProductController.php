<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
    {
      $product = Product::all();
      return view('product',['products'=>$product]);
    }

    public function detail($id)
    {
      $product = Product::find($id);
      return view('detail',['product'=>$product]);
    }

    public function search(Request $req)
    {
      $product = Product::where('name', 'like','%'.$req->input('query').'%')->get();
      return view('search',['products'=>$product]);
    }
}
