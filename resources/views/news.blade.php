@extends('layouts.utama2')

@section('title', 'News')

@section('content')
<section class="py-6 sm:py-8 md:py-12 bg-white">
  <div class="container mx-auto px-3 sm:px-6">
    
    <form action="{{ route('news.index') }}" method="GET" class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center mb-6 sm:mb-8 gap-3 sm:gap-0 max-w-3xl mx-auto">
      <input 
        type="text" 
        name="search"
        value="{{ request('search') }}"
        placeholder="Search News...." 
        class="w-full sm:w-2/3 border border-gray-300 rounded-md sm:rounded-l-md sm:rounded-r-none px-3 sm:px-4 py-2 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-blue-300"
      >
      <button  
        type="submit"
        class="sm:ml-4 border-2 border-yellow-300 bg-yellow-300 text-white font-semibold sm:font-bold px-4 sm:px-6 py-2 text-sm sm:text-base rounded-full sm:rounded-full hover:bg-white transition hover:text-black hover:border-black"
      >
        Search
      </button>
    </form>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 max-w-6xl mx-auto">
      @foreach($news as $new)
      <div class="bg-white shadow-md hover:shadow-lg transition rounded-lg overflow-hidden">
        <img src="{{ asset('img/berita/'.$new->gambar) }}" 
             alt="{{ $new->judul }}" 
             class="w-full h-40 sm:h-48 object-cover">
        <div class="p-3 sm:p-4">
          <p class="text-gray-500 text-xs sm:text-sm mb-1">{{ $new->tanggal }}</p>
          <h3 class="font-bold text-base sm:text-lg mb-2 line-clamp-2">{{ $new->judul }}</h3>
          <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4 line-clamp-3">{{ \Illuminate\Support\Str::limit($new->isi, 100) }}</p>
          <a href="{{ route('news.show', $new->id) }}" 
             class="inline-block bg-yellow-400 hover:text-black px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm font-semibold sm:font-bold rounded-full border border-yellow-400 text-white hover:bg-white hover:border-black transition-colors duration-300">
            Read More
          </a>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
@endsection