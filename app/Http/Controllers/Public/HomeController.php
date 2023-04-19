<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function product()
    {
        $categorys = Category::all();
        $products = Product::all();

        return view('home.product', compact('categorys', 'products'));
    }
    
    public function view($id)
    {
        $categorys = Category::all();
        $products = Product::find($id);

        return view('home.view', compact('categorys', 'products'));
    }

    
}
