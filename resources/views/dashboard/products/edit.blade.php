<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>
     <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <div class="card shadow-sm">
          <div class="card-body">
            <form action="{{route ('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')  
              <!-- Nama Produk -->
              <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" placeholder="Masukkan nama produk" required>
              </div>

              <!-- Deskripsi -->
              <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan deskripsi produk" required>{{ $product->description }}</textarea>
              </div>

              <!-- Stock -->
              <div class="mb-3">
                <label for="stock" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" min="0" placeholder="Masukkan jumlah stok" required>
              </div>

              <!-- Harga -->
              <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" min="0" placeholder="Masukkan harga produk" required>
              </div>

              @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid mb-3" style="max-width: 200px;">
              @endif

              <!-- Gambar -->
              <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
              </div>

              <!-- Kategori Produk -->
              <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori Produk</label>
                <select class="form-select" id="kategori_id" name="kategori_id" required>
                  <option value="" selected disabled>Pilih kategori</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}" {{ $product->kategori_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>

              <!-- Tombol -->
              <div class="d-flex justify-content-between">
                <a href="produk.html" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</x-app-layout>