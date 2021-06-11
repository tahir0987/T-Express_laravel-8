<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

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
}
