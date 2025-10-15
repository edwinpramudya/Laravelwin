@extends('layouts.utama2')

@section('title', 'Product detail')

@section('content')

<div class="max-w-6xl mx-auto py-6 sm:py-8 md:py-12 px-3 sm:px-4">
    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4 sm:mb-6">Models</h2>
    <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6">
        @foreach($types as $type)
        <div class="bg-white shadow-md hover:shadow-lg transition rounded-lg p-3 sm:p-4 text-center"> 
            <img src="{{ asset('img/produk/'.$type->gambar) }}" 
                 class="w-full h-32 sm:h-40 object-contain mb-2 sm:mb-3" 
                 alt="{{ $type->nama }}">
            <h3 class="font-bold text-base sm:text-lg mb-1 sm:mb-2 line-clamp-2">{{ $type->nama }}</h3>
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4 line-clamp-3">{{ $type->deskripsi ?? '' }}</p>
            
            <a href="{{ route('models.detail', $type->id) }}" 
               class="inline-block font-semibold sm:font-bold bg-yellow-300 hover:bg-white text-white hover:text-black px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm transition duration-200 rounded-full border border-yellow-400 hover:border-black">
                View Detail
            </a>
        </div>
        @endforeach
    </div>

    <a href="{{ url('/') }}" 
       class="inline-block mt-4 sm:mt-6 bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-3 sm:px-4 py-1.5 sm:py-2 text-sm sm:text-base rounded-full transition duration-200">
        Back
    </a>
</div>
@endsection