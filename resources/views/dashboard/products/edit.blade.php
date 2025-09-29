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
            <form>
              <!-- Nama Produk -->
              <div class="mb-3">
                <label for="namaProduk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="namaProduk" placeholder="Masukkan nama produk" required>
              </div>

              <!-- Deskripsi -->
              <div class="mb-3">
                <label for="deskripsiProduk" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsiProduk" rows="3" placeholder="Masukkan deskripsi produk" required></textarea>
              </div>

              <!-- Stock -->
              <div class="mb-3">
                <label for="stokProduk" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stokProduk" placeholder="Masukkan jumlah stok" required>
              </div>

              <!-- Harga -->
              <div class="mb-3">
                <label for="hargaProduk" class="form-label">Harga</label>
                <input type="number" class="form-control" id="hargaProduk" placeholder="Masukkan harga produk" required>
              </div>

              <!-- Gambar -->
              <div class="mb-3">
                <label for="gambarProduk" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="gambarProduk" accept="image/*" required>
              </div>

              <!-- Kategori Produk -->
              <div class="mb-3">
                <label for="kategoriProduk" class="form-label">Kategori Produk</label>
                <select class="form-select" id="kategoriProduk" required>
                  <option value="" selected disabled>Pilih kategori</option>
                  <option value="skincare">Skincare</option>
                  <option value="makeup">Makeup</option>
                  <option value="haircare">Hair Care</option>
                  <option value="bodycare">Body Care</option>
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