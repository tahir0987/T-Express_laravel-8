<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Illuminate\Support\Facades\DB;

class Productcontroller extends Controller
{
    //
    function index()
    {
        $data = product::all();
        return  view('product',['products'=>$data]);
    }
    function productDetail($id)
    {
        $data= product::find($id);
        return view('detail',['products'=>$data]);
    }
    function search(Request $req)
    {
        $data = product::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function Add_to_cart(Request $req)
    {   
        if($req->session()->has('user'))
        {
            $cart=new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect ('/');
        }
        else
        {
            return redirect ('/login');
        }
    }
    static function cartitem()
    {   
        $userid=Session::get('user')['id'];
        return cart::where('user_id',$userid)->count();
    }
    function cartList()
    {
        $userid=Session::get('user')['id'];
        $data=DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userid)
        ->get();

        return view('/cartlist',['products'=>$data]);
    }
    function removeCart($id)
    {
        cart::destroy($id);
        return redirect ('cartlist');
    }
    function orderNow()
    {
        $userid=Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userid)
        ->sum('products.price');

        return view('order',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userid=Session::get('user')['id'];
        $allcart=cart::where('user_id',$userid)->get();
        foreach($allcart as $cart)
        {
            $order=new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status='pending';
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->save();
        }
        cart::where('user_id',$userid)->delete();
        return redirect ('/');
    }
    function myorder()
    {
        $userid=Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userid)
        ->get();

        return view('myorder',['orders'=>$orders]);

    }
}   
