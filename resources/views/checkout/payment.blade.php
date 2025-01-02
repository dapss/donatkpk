@extends('layouts.app')

@section('content')
<div id="payment-popup" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-2xl font-semibold mb-4">Pilih Metode Pembayaran</h2>
        <form action="{{route('checkout.confirmation')}}" method="post" id="payment-form">
            @csrf
            <div class="mb-4">
                <input type="radio" name="payment_method" id="bank" value="bank" required>
                <label for="bank" class="block text-gray-700">Transfer Bank</label>
            </div>
            <div class="mb-4">
                <input type="radio" name="payment_method" id="ewallet" value="ewallet" required>
                <label for="ewallet" class="block text-gray-700">E-Wallet</label>
            </div>
            <div class="mb-4">
                <input type="radio" name="payment_method" id="qris" value="qris" required>
                <label for="qris" class="block text-gray-700">QRIS</label>
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closePaymentPopup()">Kembali</button>
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded">Lanjut ke Komfirmasi</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/payment.js')}}"></script>
@endsection