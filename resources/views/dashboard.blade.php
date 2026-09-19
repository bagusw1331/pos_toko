<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- card1 -->
            <x-card>
                <h3 class="text-lg font-semibold mb-2">Ringkasan Hari Ini</h3>
                <p class="text-gray-600">Selamat datang, {{ auth()->user()->name }}.</p>
            </x-card>

                        <!-- card 2 -->
            <x-card>
                <h3 class="text-lg font-semibold mb-3">Status Stok Produk</h3>

                @php
                    $daftarProduk = [
                        ['nama' => 'Beras Pandan Wangi 5kg', 'stok' => 25],
                        ['nama' => 'Minyak Goreng 2 Liter',  'stok' => 5],
                        ['nama' => 'Gula Pasir 1kg',         'stok' => 0],
                    ];
                @endphp

                <div class="divide-y divide-gray-100">
                    @foreach ($daftarProduk as $produk)
                        @php
                            if ($produk['stok'] > 10) {
                                $status = 'Aman';
                            } elseif ($produk['stok'] > 0) {
                                $status = 'Menipis';
                            } else {
                                $status = 'Habis';
                            }
                        @endphp

                        <div class="py-2 flex justify-between items-center text-sm">
                            <div>
                                <span class="text-gray-700 font-medium">{{ $produk['nama'] }}</span>
                                <span class="text-xs text-gray-500 ml-2">(Sisa: {{ $produk['stok'] }} pcs)</span>
                            </div>
                            <x-badge :status="$status" />
                        </div>
                    @endforeach
                </div>
            </x-card>

        </div>
    </div>
</x-app-layout>


