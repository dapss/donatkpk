@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit Donut</h1>
    
    <form action="{{ route('menu.update', $item->id_donut) }}" method="POST" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
            <input 
                type="text" 
                name="name" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                value="{{ old('name', $item->name) }}" 
                required
            >
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
            <textarea 
                name="description" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >{{ old('description', $item->description) }}</textarea>
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
            <input 
                type="number" 
                name="price" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                value="{{ old('price', $item->price) }}" 
                step="0.01" 
                required
            >
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>
            <input 
                type="file" 
                name="image" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <p class="text-sm text-gray-500">Leave blank to keep the current image.</p>
        </div>

        <div>
            <span class="block text-sm font-medium text-gray-700 mb-2">Status</span>
            <div class="flex items-center space-x-4">
                <label class="inline-flex items-center">
                    <input 
                        type="radio" 
                        name="status" 
                        value="1" 
                        class="form-radio text-blue-500"
                        {{ old('status', $item->status) == 1 ? 'checked' : '' }}
                    >
                    <span class="ml-2">Available</span>
                </label>
                <label class="inline-flex items-center">
                    <input 
                        type="radio" 
                        name="status" 
                        value="0" 
                        class="form-radio text-red-500"
                        {{ old('status', $item->status) == 0 ? 'checked' : '' }}
                    >
                    <span class="ml-2">Sold Out</span>
                </label>
            </div>
        </div>

        <div>
            <span class="block text-sm font-medium text-gray-700 mb-2">Best Seller</span>
            <div class="flex items-center space-x-4">
                <label class="inline-flex items-center">
                    <input 
                        type="radio" 
                        name="is_bestseller" 
                        value="1" 
                        class="form-radio text-green-500"
                        {{ old('is_bestseller', $item->is_bestseller) == 1 ? 'checked' : '' }}
                    >
                    <span class="ml-2">Yes</span>
                </label>
                <label class="inline-flex items-center">
                    <input 
                        type="radio" 
                        name="is_bestseller" 
                        value="0" 
                        class="form-radio text-gray-500"
                        {{ old('is_bestseller', $item->is_bestseller) == 0 ? 'checked ' : '' }}
                    >
                    <span class="ml-2">No</span>
                </label>
            </div>
        </div>

        <div>
            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition-colors"
            >
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection