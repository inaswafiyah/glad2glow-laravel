<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        // $products = Product::all();
        // return response()->json($products);

        {
        $products = Product::with('category')->paginate(5); // pagination
        return view('products.index', compact('products'));
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return response()->json([
            'message' => 'Produk berhasil ditambahkan',
            'data' => $product
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json([
            'message' => 'Produk berhasil diupdate',
            'data' => $product
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Produk berhasil dihapus']);
    }
}
