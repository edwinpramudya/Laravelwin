@extends('layouts.utama2')

@section('title', 'Career')

@section('content')

<section class="py-6 sm:py-8 md:py-12 bg-white">
  <div class="container mx-auto px-3 sm:px-6">

    <form action="{{ route('career.index') }}" method="GET" class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center mb-6 sm:mb-8 gap-3 sm:gap-0 max-w-3xl mx-auto">
      <input 
        type="text" 
        name="search"
        placeholder="Search Career...." 
        value="{{ request('search') }}"
        class="w-full sm:w-2/3 border border-gray-300 rounded-md px-3 sm:px-4 py-2 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-blue-300"
      >
      <button  
        type="submit"
        class="sm:ml-4 border-2 border-yellow-300 bg-yellow-300 text-white font-semibold sm:font-bold px-4 sm:px-6 py-2 text-sm sm:text-base rounded-full hover:bg-white transition hover:text-black hover:border-black"
      >
        Search
      </button>
    </form>

    <h2 class="text-center text-2xl sm:text-3xl md:text-4xl text-gray-800 mb-6 sm:mb-8 md:mb-12 font-bold">Karir</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
      @forelse($karirs as $k)
        <div class="bg-white shadow-md hover:shadow-lg transition rounded-lg p-4 sm:p-6">
          <h3 class="text-lg sm:text-xl font-bold mb-2 line-clamp-2">{{ $k->jabatan }}</h3>
          <div class="space-y-1 mb-3 sm:mb-4">
            <p class="text-gray-500 text-xs sm:text-sm">
              <span class="font-medium">Jenis Kelamin:</span> {{ $k->jenis_kelamin }}
            </p>
            <p class="text-gray-500 text-xs sm:text-sm">
              <span class="font-medium">Umur:</span> {{ $k->umur }} tahun
            </p>
          </div>
          <p class="text-gray-600 text-xs sm:text-sm mb-4 line-clamp-3">{{ $k->deskripsi }}</p>
          <a href="{{ url('/karir/' .$k->id) }}">
            <button 
              class="w-full sm:w-auto bg-yellow-300 border-2 border-yellow-300 hover:border-black text-white font-semibold sm:font-bold px-4 sm:px-8 py-2 sm:py-3 text-sm sm:text-base rounded-full hover:bg-white transition hover:text-black">
              Detail
            </button>
          </a>
        </div>
      @empty
        <p class="col-span-1 sm:col-span-2 lg:col-span-3 text-center text-gray-500 py-8 text-sm sm:text-base">No career found.</p>
      @endforelse
    </div>
  </div>
</section>
@endsection