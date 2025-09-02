@extends('layouts.app')

@section('content')
    <h1>Daftar Produk</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - Rp{{ $product->price }}</li>
        @endforeach
    </ul>
@endsection
