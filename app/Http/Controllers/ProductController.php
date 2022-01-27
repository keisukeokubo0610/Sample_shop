<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    // productsページ遷移
    
public function viewProductList() {

    return view('productList');

}


}
