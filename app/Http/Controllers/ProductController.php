<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){
        $data = DB::table('products')->get();
        return view('product', ['products'=>$data]);
    }
    public function details($id){
        $data = DB::table("products")->find($id);
        return view("details",["product"=> $data]);
    }
}