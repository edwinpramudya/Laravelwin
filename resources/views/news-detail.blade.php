@extends('layouts.utama2')

@section('title', 'News Detail')

@section('content')

<div class="max-w-7xl mx-auto py-6 sm:py-8 md:py-12 px-3 sm:px-4 grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">

    <div class="md:col-span-2">
        <h1 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4 leading-tight">{{ $new->judul }}</h1>
        <p class="text-gray-500 text-xs sm:text-sm mb-3 sm:mb-4">
            {{ \Carbon\Carbon::parse($new->tanggal)->locale('id')->isoFormat('D MMMM YYYY') }}
        </p>
        <img src="{{ asset('img/berita/'.$new->gambar) }}" 
             alt="{{ $new->judul }}" 
             class="w-full h-48 sm:h-64 md:h-96 object-cover mb-4 sm:mb-6 rounded-lg shadow-md">
        <div class="text-gray-700 text-sm sm:text-base leading-relaxed">
            {!! nl2br(e($new->isi)) !!}
        </div>
        <a href="{{ url('/news') }}" 
           class="inline-block text-white font-semibold sm:font-bold mt-4 sm:mt-6 bg-yellow-400 px-4 sm:px-5 py-2 text-sm sm:text-base rounded-full border border-yellow-400 hover:border-black hover:text-black hover:bg-white transition-colors duration-200">
            Back
        </a>
    </div>

    <div class="mt-6 md:mt-0">
        <h2 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4 border-b pb-2">Recent Post</h2>
        <div class="space-y-4 sm:space-y-6">
            @foreach($recent as $item)
                <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition p-2 sm:p-0">
                    <a href="{{ url('/news/'.$item->id) }}">
                        <img src="{{ asset('img/berita/'.$item->gambar) }}" 
                             alt="{{ $item->judul }}" 
                             class="w-full h-32 sm:h-40 object-cover mb-2 rounded-lg">
                    </a>
                    <a href="{{ url('/news/'.$item->id) }}" 
                       class="font-semibold text-sm sm:text-base text-gray-800 hover:text-yellow-500 block line-clamp-2 mb-1">
                        {{ \Illuminate\Support\Str::limit($item->judul, 80) }}
                    </a>
                    <p class="text-xs sm:text-sm text-gray-500">
                        {{ \Carbon\Carbon::parse($item->tanggal)->locale('id')->isoFormat('D MMM YYYY') }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection