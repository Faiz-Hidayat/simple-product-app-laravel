@extends('layouts.app')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-bold text-indigo-800">Add New Product</h2>
    <p class="text-gray-600 mt-1">Create a new product in your inventory</p>
</div>

<div class="bg-white rounded-lg shadow-md p-6 border border-indigo-100">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                required placeholder="Enter product name">
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">Rp</span>
                </div>
                <input type="number" name="price" id="price" value="{{ old('price') }}"
                    class="pl-9 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                    step="1" min="0" required placeholder="0">
            </div>
            @error('price')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" id="description" rows="4"
                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                placeholder="Enter product description">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-6 rounded-md shadow-sm transition duration-300 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Save Product
            </button>
            <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-gray-800 hover:underline transition duration-300">Cancel</a>
        </div>
    </form>
</div>

<div class="mt-8 bg-indigo-50 rounded-lg p-6 border border-indigo-100">
    <h3 class="text-lg font-medium text-indigo-800 mb-4">Product Information Guidelines</h3>

    <div class="space-y-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-gray-700">
                    <span class="font-medium text-gray-900">Product Name:</span>
                    Choose a clear, descriptive name that helps customers understand what your product is.
                </p>
            </div>
        </div>

        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-gray-700">
                    <span class="font-medium text-gray-900">Price:</span>
                    Set a competitive price that reflects the value of your product.
                </p>
            </div>
        </div>

        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-gray-700">
                    <span class="font-medium text-gray-900">Description:</span>
                    Provide detailed information about your product's features, benefits, and specifications.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection