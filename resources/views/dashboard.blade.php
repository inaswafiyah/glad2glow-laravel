<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-primary-subtle">
                                    <div class="card-header fw-bold">
                                        Jumlah Produk
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title fw-bold" style="font-size: 30px">150</h1>
                                        <p class="card-text">total produk yang tersedia di sistem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-success-subtle">
                                    <div class="card-header fw-bold">
                                        Jumlah Klik Produk
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title fw-bold" style="font-size: 30px">12,500</h1>
                                        <p class="card-text">total klik produk yang telah dilihat penguna.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-warning-subtle">
                                    <div class="card-header fw-bold">
                                        Jumlah Kategori Produk
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title fw-bold" style="font-size: 30px">10</h1>
                                        <p class="card-text">total kategori produk yang tersedia di sistem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
