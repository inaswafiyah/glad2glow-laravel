<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-sm">
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
                    <div class="card-body">
                        <form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Nama Produk -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                    placeholder="Masukkan nama produk" required>
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                    placeholder="Masukkan deskripsi produk" required>{{ old('description') }}</textarea>
                            </div>

                            <!-- Stock -->
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stock" name="stock"
                                value="{{ old('stock') }}"
                                    placeholder="Masukkan jumlah stok" required>
                            </div>

                            <!-- Harga -->
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="price" name="price"
                                value="{{ old('price') }}"
                                    placeholder="Masukkan harga produk" required>
                            </div>

                            <!-- Gambar -->
                            <div class="mb-3">
                                <label for="gambarProduk" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" id="gambarProduk" name="image" accept="image/*"
                                    required>
                            </div>

                            <!-- Kategori Produk -->
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Kategori Produk</label>
                                <select class="form-select" id="category_id" name="kategori_id" required>
                                    <option value="" disabled selected>Pilih kategori</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
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
