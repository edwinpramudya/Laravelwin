@extends('layouts.utama2')

@section('title', 'All Products')

@section('content')

  <section class="py-6 sm:py-12">

    <div class="max-w-4xl mx-auto mb-6 sm:mb-8 flex items-center px-4">
      <form action="{{ route('products.index') }}" method="GET" class="flex flex-col sm:flex-row w-full gap-3 sm:gap-4">
        <input 
          type="text" 
          name="search"
          placeholder="Search Product...." 
          class="flex-grow border border-gray-300 rounded-full px-4 sm:px-6 py-2.5 sm:py-3 text-base sm:text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
          value="{{ request('search') }}"
        >
        <button  
          type="submit"
          class="bg-yellow-400 text-black font-bold px-6 sm:px-8 py-2.5 sm:py-3 rounded-full hover:bg-yellow-500 transition whitespace-nowrap"
        >
          Search
        </button>
      </form>
    </div>

    <h2 class="text-center text-2xl sm:text-3xl lg:text-4xl font-bold mb-8 sm:mb-12 px-4">{{ $title }}</h2>

    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4 lg:gap-6 max-w-7xl mx-auto px-3 sm:px-4">
      @forelse($types as $type)
        <div class="bg-white shadow-md rounded-lg p-3 sm:p-4 lg:p-6 text-center hover:shadow-xl transition duration-300">
    
          <div class="mb-3 sm:mb-4 h-24 sm:h-32 lg:h-40 flex items-center justify-center">
            <img src="{{ $type->gambar ? asset('img/produk/'.$type->gambar) : asset('img/no-image.png') }}" 
                 alt="{{ $type->nama }}" 
                 class="max-h-full max-w-full object-contain"
                 onerror="this.src='{{ asset('img/no-image.png') }}'">
          </div>
          
          <h3 class="font-bold text-sm sm:text-base lg:text-xl mb-1 sm:mb-2 text-gray-800 line-clamp-2">{{ $type->nama }}</h3>
          
          <p class="text-gray-500 text-xs sm:text-sm mb-3 sm:mb-4">
            <span class="font-medium">Category:</span> 
            <span class="block sm:inline">{{ $type->product->nama ?? 'Uncategorized' }}</span>
          </p>
          <a href="{{ route('models.detail', $type->id) }}" 
             class="bg-yellow-400 text-black font-semibold text-xs sm:text-sm lg:text-base px-3 sm:px-4 lg:px-6 py-1.5 sm:py-2 rounded-full inline-block hover:bg-yellow-500 transition duration-300 w-full sm:w-auto">
            View Details
          </a>
        </div>
      @empty
        <div class="col-span-2 sm:col-span-2 md:col-span-3 lg:col-span-4 text-center py-12 sm:py-20 px-4">
          <svg class="mx-auto h-12 w-12 sm:h-16 sm:w-16 text-gray-400 mb-3 sm:mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
          </svg>
          <p class="text-gray-500 text-lg sm:text-xl font-medium">No products found</p>
          <p class="text-gray-400 text-xs sm:text-sm mt-2">Try adjusting your search</p>
        </div>
      @endforelse
    </div>

  </section>

@endsection