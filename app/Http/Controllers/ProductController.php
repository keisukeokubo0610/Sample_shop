<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // top画面
    public function viewIndex()
    {
        return view('index');
    }
    // productsページ遷移
    public function viewProductList()
    {
        return view('productList');
    }
    // コンセプト
    public function viewConcept()
    {
        return view('concept');
    }
    // ニュース
    public function viewNews()
    {
        return view('news');
    }
}
