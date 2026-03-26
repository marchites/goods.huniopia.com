<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{
    //
    public function index()
    {
        return view('landing.index', [
            'categories' => Category::all(),
            'products' => Product::latest()->paginate(6),
        ]);
    }
}
