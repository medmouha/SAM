@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto mb-8 rounded-lg">
    <p class="text-gray-600 mb-4">{{ $product->description }}</p>
    <p class="text-blue-500 font-bold text-2xl">{{ $product->price }} CFA</p>
    <a href="{{ route('products.index') }}" class="mt-8 inline-block bg-blue-500 text-white py-2 px-4 rounded">Retour aux produits</a>
</div>
@endsection
