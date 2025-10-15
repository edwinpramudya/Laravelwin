@extends('layouts.utama2')

@section('title', 'Detail Karir')

@section('content')

<section class="py-6 sm:py-8 md:py-12">
  <div class="container mx-auto px-3 sm:px-6 max-w-4xl bg-white shadow-md sm:shadow-lg rounded-lg p-4 sm:p-6 md:p-8">
    
    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">{{ $karirs->jabatan }}</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 md:gap-6 mb-4 sm:mb-6">
      <div class="p-3 sm:p-4 bg-gray-100 rounded-lg">
        <p class="text-gray-700 font-semibold text-sm sm:text-base mb-1">Jenis Kelamin:</p>
        <p class="text-gray-600 text-sm sm:text-base">{{ $karirs->jenis_kelamin }}</p>
      </div>
      <div class="p-3 sm:p-4 bg-gray-100 rounded-lg">
        <p class="text-gray-700 font-semibold text-sm sm:text-base mb-1">Umur:</p>
        <p class="text-gray-600 text-sm sm:text-base">{{ $karirs->umur }} tahun</p>
      </div>
    </div>

    <div class="mb-6 sm:mb-8">
      <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-2 sm:mb-3">Deskripsi Pekerjaan</h2>
      <p class="text-gray-700 text-sm sm:text-base leading-relaxed">{{ $karirs->deskripsi }}</p>
    </div>

    <div class="mt-6 sm:mt-8">
      <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-3 sm:mb-4">Pekerjaan lainnya</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
        @foreach($detail as $d)
          <a href="{{ url('/karir/'.$d->id) }}" 
             class="block p-3 sm:p-4 bg-yellow-100 hover:bg-yellow-200 rounded-lg transition text-gray-800 font-semibold text-sm sm:text-base">
            {{ $d->jabatan }}
          </a>
        @endforeach
      </div>
    </div>

    <div class="mt-8 sm:mt-10 text-center">
      <a href="https://wa.me/6282180040010" target="_blank"
         class="inline-flex items-center justify-center w-full sm:w-auto bg-yellow-400 hover:bg-green-500 text-white border-2 border-yellow-400 hover:border-black hover:text-black font-semibold sm:font-bold px-6 sm:px-8 py-3 sm:py-4 text-sm sm:text-base rounded-full transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
          <path d="M20.52 3.48A11.91 11.91 0 0 0 12 0C5.37 0 .02 5.37.02 12c0 2.12.56 4.18 1.63 6.01L0 24l6.18-1.62A11.96 11.96 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.21-3.48-8.52zM12 22a9.9 9.9 0 0 1-5.07-1.39l-.36-.21-3.65.96.98-3.56-.23-.37A9.9 9.9 0 0 1 2 12c0-5.52 4.48-10 10-10 2.67 0 5.18 1.04 7.07 2.93A9.9 9.9 0 0 1 22 12c0 5.52-4.48 10-10 10zm5.09-7.58c-.28-.14-1.65-.81-1.91-.9-.26-.1-.45-.14-.64.14-.19.28-.73.9-.89 1.08-.16.18-.33.2-.61.07-.28-.14-1.18-.43-2.24-1.39-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.12-.12.28-.33.42-.49.14-.16.19-.28.28-.47.09-.19.05-.36-.02-.5-.07-.14-.64-1.55-.88-2.12-.23-.56-.47-.48-.64-.49h-.55c-.19 0-.5.07-.76.36-.26.28-1 1-1 2.43s1.02 2.82 1.16 3.01c.14.19 2.01 3.05 4.87 4.28.68.29 1.21.46 1.62.59.68.22 1.3.19 1.79.12.55-.08 1.65-.67 1.88-1.31.23-.64.23-1.19.16-1.31-.07-.12-.26-.19-.55-.33z"/>
        </svg>
        Tanya Lebih Lanjut
      </a>
    </div>

  </div>
</section>
@endsection