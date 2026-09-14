<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>
     <div class="container mt-5">
       @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
    <div class="d-flex justify-content-between align-items-center mb-3">
      <a href="{{ route('product.create') }}" class="btn btn-primary">+ Tambah Produk</a>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <table class="table table-bordered table-striped text-center">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Stok</th>
              <th>Harga</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->stock }}</td>
              <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
              <td>
                @if ($product->image)
                  <img src="{{ filter_var($product->image, FILTER_VALIDATE_URL) ? $product->image : asset('storage/' . $product->image) }}"
                       alt="{{ $product->name }}"
                       style="width: 50px; height: 50px; object-fit: cover;">
                @else
                  <span class="text-muted">Tidak ada gambar</span>
                @endif
              </td>
              <td>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </td>
            </tr>
            @endforeach
            <tr>
              <td>2</td>
              <td>Serum</td>
              <td>Exfoliating Serum</td>
              <td>50</td>
              <td>150.000</td>
              <td><img src="{{ asset('landing/assets/images1/serum.png') }}" alt="" style="width: 50px"></td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Cushion</td>
              <td>Cushion Wajah</td>
              <td>10</td>
              <td>200.000</td>
              <td><img src="{{ asset('landing/assets/images1/cushion.png') }}" alt="" style="width: 50px"></td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app-layout>