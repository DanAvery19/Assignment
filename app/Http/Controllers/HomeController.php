<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Auth;
use DB;
use Carbon\Carbon;
use App\Cart_Items;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $cart_items = DB::table('cart_items')
        ->join('products', 'cart_items.product_id', '=', 'products.id')
        ->get();
        return view('home', compact('products', 'cart_items'));
        // echo $cart_items;
    }

    public function cart($id){
        $user_id = Auth::user()->id;
        $cart_id = DB::table('carts')->where('user_id', $user_id)->value('id');
        $quantity = 1;
        $price = DB::table('products')->where('id', $id)->value('price');
        // echo $amount;
        // echo $user_id;
        // echo $quantity;
        // echo $cart_id;

        $clicked = DB::table('cart_items')->where('product_id', $id)->get();
        echo $clicked;

        if($clicked == '[]'){
            DB::table('cart_items')->insert([
                'cart_id' => $cart_id,
                'product_id' => $id,
                'amount' => $price,
                'quantity' => $quantity,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'barcode' => ''
            ]);
            DB::table('products')->where('id', $id)->decrement('stock');
        }if($clicked != '[]'){
            DB::table('cart_items')->where('product_id', $id)->increment('quantity');
            DB::table('products')->where('id', $id)->decrement('stock');
            $quantity = DB::table('cart_items')->where('product_id', $id)->value('quantity');
            $amount = $quantity * $price;
            DB::table('cart_items')->where('product_id', $id)->update(['amount'=>$amount]);
        }
        return redirect('/home');
    }
}
