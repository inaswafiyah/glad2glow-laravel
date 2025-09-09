@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f4f4f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr); /* default HP */
            gap: 20px;
            margin-top: 30px;
        }
        @media (min-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr); /* tablet */
            }
        }
        @media (min-width: 1024px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr); /* laptop/PC */
            }
        }
        .product-card {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .product-card img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }
        .product-card h3 {
            margin: 10px 0;
            color: #444;
        }
        .product-card p {
            font-size: 14px;
            color: #666;
        }
        .price {
            font-weight: bold;
            color: #e67e22;
            margin-top: 10px;
            display: block;
        }
        .pagination {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }
        .pagination svg {
            width: 20px;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>

    <div class="product-grid">
        @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                <p><strong>Stok:</strong> {{ $product->stock }}</p>
                <p><strong>Kategori:</strong> {{ $product->category->name ?? '-' }}</p>
            </div>
        @endforeach
    </div>

    <div class="pagination">
        {{ $products->links() }}
    </div>
</body>
</html>
@endsection
