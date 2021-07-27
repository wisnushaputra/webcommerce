<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index()
    {
        $data = product::all();

        return view('product', ['products'=>$data]);
    }
    function detail($id)
    {
        $data = product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data = Product::where('nama', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->User_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
        
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
}
