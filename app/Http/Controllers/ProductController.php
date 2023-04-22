<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
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
    public function addToCart(Request $req){
        if($req->session()->has('user'))
            {
                $productId = $req->product_id;
                $userId = $req->session()->get('user')->id;
                DB::table('cart')->updateOrInsert(['product_id'=>$productId, 'user_id'=> $userId]);
                return redirect('/home');
            }
        else {
            return redirect("/login");
        }
    }
    static function cartItems(){
        $user = Session::get('user')->id;
        return $cart = DB::table("cart")->where('user_id', '=', $user)->count();    
    }
}