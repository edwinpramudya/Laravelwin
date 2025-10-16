@extends('layouts.utama')

@section('title', 'Struktur Team')

@section('content')

<div class="mt-6 sm:mt-12 md:mt-16 mb-8 sm:mb-20 md:mb-32 px-3">
  <h1 class="font-bold text-xl sm:text-3xl md:text-4xl text-center">Struktur Organisasi</h1>
</div>

<div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 mb-8 sm:mb-16 md:mb-20">
    <div class="mb-4 sm:mb-8">
      <img 
        src="{{ asset('img/team/' . $stru->gambar) }}" 
        alt="Struktur Organisasi" 
        class="w-full h-auto rounded shadow-sm sm:shadow-md hover:shadow-lg transition-shadow duration-300"
      >
    </div>
</div>

@endsection