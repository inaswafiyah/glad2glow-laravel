<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategori Produk') }}
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
      <a href="{{ route('product-category.create') }}" class="btn btn-primary">+ Tambah Kategori</a>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <table class="table table-bordered table-striped text-center">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nama Kategori</th>
              <th>Jumlah Produk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->products_count }}</td>
              <td>
                <a href="{{ route('category-products-edit') }}" class="btn btn-sm btn-warning">Edit</a>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app-layout>