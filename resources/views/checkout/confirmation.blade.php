@extends('layouts.app')

@section('content')
<div id="confirmation-popup" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-2xl font-semibold mb-4">Konfirmasi Pesanan</h2>
        <div class="mb-4">
            <h3 class="text-lg font-semibold">Ringkasan Pesanan</h3>
            <p>Nama: disini</p>
            <p>Telepon: 1234567890</p>
            <p>Total Pesanan: disini</p>
            <p>Metode Pembayaran: disini</p>
        </div>
        <div class="mb-4">
            <h3 class="text-lg font-semibold">Instruksi Pembayaran</h3>
            <p>Arahan sesuai metode pembayaran</p>
        </div>
        <div class="flex justify-end">
            <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="goBack()">Kembali</button>
            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="confirmAndPay()">Konfirmasi & Bayar</button>
        </div>
    </div>
</div>
@endsection