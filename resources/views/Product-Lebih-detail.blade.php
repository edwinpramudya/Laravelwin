@extends('layouts.utama2')

@section('title', 'Product Details')

@section('content')

<div class="max-w-6xl mx-auto py-6 sm:py-8 md:py-12 px-3 sm:px-4">
  <div class="bg-white shadow-md sm:shadow-lg rounded-lg p-4 sm:p-6 md:p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 items-start">

      <div class="flex justify-center items-center">
        <img src="{{ asset('img/produk/'.$type->gambar) }}" 
             alt="{{ $type->nama }}" 
             class="w-full h-48 sm:h-64 md:h-80 object-contain rounded-lg border border-gray-200 shadow-sm">
      </div>

      <div class="flex flex-col justify-start space-y-4 sm:space-y-6">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">{{ $type->nama }}</h1>

        <h2 class="text-lg sm:text-xl md:text-2xl font-semibold border-b-2 border-gray-300 pb-1">
          Specification
        </h2>

        @if($type->pdf && file_exists(public_path('pdf/produk/'.$type->pdf)))
          <a href="{{ asset('pdf/produk/'.$type->pdf) }}" 
             download
             class="px-4 sm:px-6 py-2 sm:py-3 border-2 border-gray-600 rounded-full text-gray-700 text-sm sm:text-base font-semibold hover:bg-gray-100 transition w-full sm:w-max text-center">
            Download Specifications
          </a>
        @else
          <span class="px-4 sm:px-6 py-2 sm:py-3 border-2 border-gray-400 rounded-full text-gray-400 text-sm sm:text-base font-semibold cursor-not-allowed w-full sm:w-max text-center inline-block">
            File PDF belum tersedia
          </span>
        @endif

        <a href="https://wa.me/6285777801687?text=Halo%20Admin,%20saya%20ingin%20tanya%20tentang%20{{ urlencode($type->nama) }}" 
           target="_blank"
           class="px-4 sm:px-6 py-2 sm:py-3 bg-green-500 text-white rounded-full text-sm sm:text-base font-semibold hover:bg-green-600 transition flex items-center justify-center w-full sm:w-max">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.52 3.48A11.91 11.91 0 0 0 12 0C5.37 0 .02 5.37.02 12c0 2.12.56 4.18 1.63 6.01L0 24l6.18-1.62A11.96 11.96 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.21-3.48-8.52zM12 22a9.9 9.9 0 0 1-5.07-1.39l-.36-.21-3.65.96.98-3.56-.23-.37A9.9 9.9 0 0 1 2 12c0-5.52 4.48-10 10-10 2.67 0 5.18 1.04 7.07 2.93A9.9 9.9 0 0 1 22 12c0 5.52-4.48 10-10 10zm5.09-7.58c-.28-.14-1.65-.81-1.91-.9-.26-.1-.45-.14-.64.14-.19.28-.73.9-.89 1.08-.16.18-.33.2-.61.07-.28-.14-1.18-.43-2.24-1.39-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.12-.12.28-.33.42-.49.14-.16.19-.28.28-.47.09-.19.05-.36-.02-.5-.07-.14-.64-1.55-.88-2.12-.23-.56-.47-.48-.64-.49h-.55c-.19 0-.5.07-.76.36-.26.28-1 1-1 2.43s1.02 2.82 1.16 3.01c.14.19 2.01 3.05 4.87 4.28.68.29 1.21.46 1.62.59.68.22 1.3.19 1.79.12.55-.08 1.65-.67 1.88-1.31.23-.64.23-1.19.16-1.31-.07-.12-.26-.19-.55-.33z"/>
          </svg>
          Tanyakan Ke Admin
        </a>
      </div>

    </div>
  </div>
</div>

@endsection