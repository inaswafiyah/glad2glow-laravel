<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // menampilkan jumlah produk
        $jumlahProduk = product::count();

        // menghitung total klik
        $jumlahKlikProduct = product::sum('click');

        // menampilkan jumlah kategori produk
        $jumlahKategoriProduct = ProductCategory::count();
        return view('dashboard',
        compact(
            'jumlahProduk', 
            'jumlahKlikProduct', 
            'jumlahKategoriProduct'
            ) 
        );
    }
}
