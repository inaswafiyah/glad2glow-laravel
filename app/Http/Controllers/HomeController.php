<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        {
        $products = product::with('category')->paginate(5); 
        return view('home', compact('products'));
    }
    }
}
