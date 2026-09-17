<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kategori Produk') }}
        </h2>
    </x-slot>
     <div class="card shadow-sm">
          <div class="card-body">
            <form action="{{route ('product-category.update', $category->id)}}" method="POST">
              @method('PUT')
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" value="{{$category->name}}" id="name" 
                name="name" placeholder="Masukkan nama kategori" required>
              </div>
              <div class="d-flex justify-content-between">
                <a href="{{ route('product-category.edit', $category->id) }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update Kategori</button>
              </div>
            </form>
          </div>
        </div>
</x-app-layout>