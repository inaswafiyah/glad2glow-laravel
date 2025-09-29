<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kategori Produk') }}
        </h2>
    </x-slot>
     <div class="card shadow-sm">
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="namaKategori" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="namaKategori" placeholder="Masukkan nama kategori" required>
              </div>
              <div class="d-flex justify-content-between">
                <a href="kategori.html" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>
        </div>
</x-app-layout>