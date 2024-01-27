<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Product_Controller extends Controller
{
    public function showData()
    {
        $product = DB::table("product") ->get();
        return view("product-list" ,["product" => $product]);
    }
}
