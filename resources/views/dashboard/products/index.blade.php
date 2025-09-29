<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>
     <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <a href="{{ route('products.tambah') }}" class="btn btn-primary">+ Tambah Produk</a>
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
          <tbody>
            <tr>
              <td>1</td>
              <td>Hand Body</td>
              <td>Hand Body Lotion</td>
              <td>100</td>
              <td>100.000</td>
              <td><img src="{{ asset('landing/assets/images1/handbody.png') }}" alt="" style="width: 50px"></td>
              <td>
                <a href="{{ route('products.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </td>
            </tr>
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