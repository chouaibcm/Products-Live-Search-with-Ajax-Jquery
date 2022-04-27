<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    public function shop(Request $request)
    {
        if($request->has('q')){
            $q=$request->q;
            // return response()->json($q);
            $products=Product::where('title','like','%'.$q.'%')->get();
            $viewRendered = view('search1', compact('products'))->render();
            return response()->json(['success' => true, 'html' => $viewRendered]);
        }else{
            $products=Product::all();
            return view('shop',compact('products'));
    }
    }
    public function shop2(Request $request)
    {
        if($request->has('q')){
            $q=$request->q;
            $products=Product::where('title','like','%'.$q.'%')->paginate(10);
            $viewRendered = view('search2', compact('products'))->render();
            return response()->json(['success' => true, 'html' => $viewRendered]);
        }else{
            $products=Product::all();
            return view('shop2',compact('products'));
    }
    }
}
