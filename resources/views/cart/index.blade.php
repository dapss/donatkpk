@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Keranjang Belanja</h1>

    @if($cartItems->count() > 0)
        <div class="grid md:grid-cols-3 gap-6">
            <div class="md:col-span-2">
                @foreach($cartItems as $item)
                    <div class="bg-white shadow-md rounded-lg p-4 mb-4 flex items-center">
                        <img 
                            src="{{ $item->attributes->image }}" 
                            alt="{{ $item->name }}" 
                            class="w-24 h-24 object-cover rounded-md mr-4"
                        >
                        <div class="flex-grow">
                            <h3 class="font-bold">{{ $item->name }}</h3>
                            <p>Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                            
                            <div class="flex items-center mt-2">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input 
                                        type="number" 
                                        name="quantity" 
                                        value="{{ $item->quantity }}" 
                                        min="1"
                                        class="w-16 border rounded px-2 py-1"
                                    >
                                    <button type="submit" class="ml-2 text-blue-500">Update</button>
                                </form>
                            </div>
                        </div>
                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>

            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Ringkasan Belanja</h2>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span>Total Produk</span>
                        <span>{{ $cartItems->count() }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Total Harga</span>
                        <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                    </div>
                    <hr>
                    <a 
                        href="{{ route('checkout') }}" 
                        class="w-full bg-orange-500 text-white py-2 rounded-lg text-center block"
                    >
                        Lanjut Checkout
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-12">
            <p class="text-2xl mb-4">Keranjang belanja kosong</p>
            <a 
                href="{{ route('menu') }}" 
                class="bg-orange-500 text-white px-6 py-2 rounded-lg"
            >
                Mulai Belanja
            </a>
        </div>
    @endif
</div>
@endsection