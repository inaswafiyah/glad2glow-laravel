<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = product::with('category')->paginate(5); 
        return view('home', compact('products'));
    }

    public function cart(){
        return view('cart');
    }

    public function click($product_id){
        $product = Product::findOrFail($product_id);
        $product->click = $product->click + 1;
        $product->save();

        $no_wa = '085693238253';

        $text = 'hallo, saya ingin membeli' .$product->name ;

        $url = 'https://api.whatsapp.com/send?phone=' . $no_wa . '&text=' . urlencode($text);

        return redirect()->away($url);
    }
}
