@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Add New Item</h1>
    
    <form action="{{ route('menu.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
        @csrf

        <!-- Select Type -->
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700 mb-2">Type</label>
            <select 
                name="type" 
                id="type" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
            >
                <option value="donut">Donut</option>
                <option value="glaze">Glaze</option>
                <option value="topping">Topping</option>
            </select>
        </div>

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                value="{{ old('name') }}" 
                required
            >
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
            <textarea 
                name="description" 
                id="description" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Price -->
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
            <input 
                type="number" 
                name="price" 
                id="price" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                step="0.01" 
                value="{{ old('price') }}" 
                required
            >
            @error('price')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image -->
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>
            <input 
                type="file" 
                name="image" 
                id="image" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required
            >
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Status -->
        <div>
            <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
            <select 
                name="status" 
                id="status" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
            >
                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Available</option>
                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Sold Out</option>
            </select>
            @error('status')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Is Bestseller (Visible only for Donut) -->
        <div 
            id="is-bestseller-container" 
            class="hidden"
        >
            <label for="is_bestseller" class="block text-sm font-medium text-gray-700 mb-2">Is Bestseller</label>
            <select 
                name="is_bestseller" 
                id="is_bestseller" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
                <option value="1" {{ old('is_bestseller') == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('is_bestseller') == 0 ? 'selected' : '' }}>No</option>
            </select>
            @error('is_bestseller')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition-colors"
            >
                Add Item
            </button>
        </div>
    </form>
</div>

<script>
    // Show/Hide "Is Bestseller" field based on type selection
    const typeSelect = document.getElementById('type');
    const isBestsellerContainer = document.getElementById('is-bestseller-container');

    function toggleBestsellerVisibility() {
        isBestsellerContainer.classList.toggle('hidden', typeSelect.value !== 'donut');
    }

    typeSelect.addEventListener('change', toggleBestsellerVisibility);
    
    // Initial state on page load
    toggleBestsellerVisibility();
</script>
@endsection