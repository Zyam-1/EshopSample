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
}
