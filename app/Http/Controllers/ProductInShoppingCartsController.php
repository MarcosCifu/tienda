<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductInShoppingCartsController extends Controller
{
    //
    public function __construct(){
        $this->middleware("shopping_cart");
    }
    public function store(Request $request){

    }
    public function destroy($id){

    }
}
