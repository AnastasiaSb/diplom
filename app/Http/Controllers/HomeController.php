<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Category;
use App\Shop\Products\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = $this->category->with(['images', 'subCategories'])->parent()->get();
       $products = $this->product->where('recommended', '=', '1')->get();
       return view('home',['categories' => $categories, 'products'=>$products ]);
    }
}
