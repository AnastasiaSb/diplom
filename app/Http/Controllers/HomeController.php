<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
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
       return view('home', ['categories' => $categories]);
    }
}
