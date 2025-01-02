@extends('layouts.app')

@section('content')
<div id="checkout-popup" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-2l font-semibold mb-4">Informasi Pembeli dan Pesanan</h2>
        <form id="checkout-form" action="{{route('checkout.process')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="w-full p-2 border-rounded" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Nomor Telepon</label>
                <input type="text" name="phone" id="phone" class="w-full p-2 border-rounded" required>
            </div>
            <div class="mb-4">
                <h3 class="text-lg font-semibold">Ringkasan Pesanan</h3>
                <p>Output pesanan di sini</p>
                <p class="font-semibold">Total: disini</p>
            </div>
            <div class="mb-4">
                <label for="notes" class="block text-gray-700">Catatan Tambahan</label>
                <textarea name="notes" id="notes" class="w-full p-2 border rounded"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeCheckoutPopup()">Kembari ke Keranjang</button>
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded">Lanjut ke Pembayaran</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/checkout.js')}}"></script>
@endsection