@extends('layouts.utama')

@section('title', 'Home')

@section('content')

<section class="text-center py-8 px-4 sm:py-12">
  <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-2">{{ $title }}</h2>
  <h3 class="text-lg sm:text-xl md:text-3xl font-bold mb-4 sm:mb-6">Authorized Dealer Of</h3>
  
  <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6 md:gap-10 mt-4 sm:mt-6">
    <img src="img/sunwardtulisan.png" alt="Sunward" class="h-8 sm:h-12 md:h-16 object-contain">
    <img src="img/ud.png" alt="UD Trucks" class="h-16 sm:h-24 md:h-32 w-32 sm:w-40 md:w-48 object-contain">
    <img src="img/shacmantulisan.png" alt="Shacman" class="h-16 sm:h-24 md:h-32 w-32 sm:w-40 md:w-48 object-contain">
    <img src="img/liu.png" alt="LiuGong" class="h-8 sm:h-12 md:h-16 object-contain">
  </div>

  <p class="mt-6 sm:mt-8 md:mt-10 max-w-3xl mx-auto text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed px-4">
    Hayyu Pratama Dealer is the official distributor of heavy equipment such as Sunward, Shacman and UD Trucks.
    Our company prioritizes integrity, commitment, and excellent service to customers...
  </p>
</section>

<section class="py-8 sm:py-10 md:py-12 bg-white">
  <h2 class="text-center text-xl sm:text-2xl md:text-3xl font-bold mb-6 sm:mb-8 px-4">Products</h2>
  <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 max-w-6xl mx-auto px-4">

    @foreach($products as $product)
      <div class="bg-white shadow-md hover:shadow-lg transition rounded-lg sm:rounded-xl p-4 sm:p-5 text-center">
        <img src="{{ asset('img/produk/'.$product->gambar) }}" alt="{{ $product->nama }}" 
             class="w-full h-32 sm:h-40 md:h-44 object-contain mb-3 sm:mb-4">
        <h3 class="font-bold text-base sm:text-lg md:text-xl mb-2 sm:mb-3 line-clamp-2">{{ $product->nama }}</h3>
        <a href="{{ route('product.show', $product->id) }}" 
           class="bg-yellow-400 text-white px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm md:text-base font-semibold inline-block rounded-full border border-yellow-400 hover:bg-white hover:text-black hover:border-black transition">
          Details
        </a>
      </div>
    @endforeach

  </div>
</section>

<section class="bg-gray-50 py-8 sm:py-10 md:py-12">
  <h2 class="text-center text-xl sm:text-2xl md:text-3xl font-bold mb-6 sm:mb-8 px-4">News</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 max-w-6xl mx-auto px-4">
    @foreach($news as $new)
      <div class="bg-white shadow-md hover:shadow-lg transition rounded-lg sm:rounded-xl overflow-hidden">
        <img src="{{ asset('img/berita/'.$new->gambar) }}" alt="{{ $new->judul }}" 
             class="w-full h-40 sm:h-48 object-cover">
        <div class="p-3 sm:p-4">
          <p class="text-gray-500 text-xs mb-1 sm:mb-2">{{ $new->tanggal }}</p>
          <h3 class="font-bold text-base sm:text-lg md:text-xl mb-2 line-clamp-2">{{ $new->judul }}</h3>
          <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4 line-clamp-3">{{ Str::limit($new->isi, 100) }}</p>
          <a href="{{ route('news.show', $new->id) }}" 
             class="inline-block bg-yellow-400 text-white font-semibold px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm md:text-base rounded-full border border-yellow-400 hover:border-black hover:bg-white hover:text-black transition">
            Read More
          </a>
        </div>
      </div>
    @endforeach
  </div>
</section>

<section class="py-8 sm:py-10 md:py-12 bg-white">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">Videos</h2>
    <div class="relative w-full" style="padding-bottom: 56.25%;">
      <iframe class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg"
        src="https://youtube.com/embed/4rZakwdJqWk"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>

@endsection