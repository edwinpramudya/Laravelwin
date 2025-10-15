@extends('layouts.utama')

@section('title', 'Visi Misi')

@section('content')
<main class="flex-grow">
<section class="py-16">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-4xl text-gray-800 mb-8">Visi dan Misi</h1>
        </div>

        @foreach ($visim as $item)
        <div class="grid md:grid-cols-2 gap-16 max-w-5xl mx-auto mb-12">
            <div class="text-center">
                <h2 class="text-2xl text-gray-800 mb-8">Visi</h2>
                <p class="text-gray-600 leading-relaxed text-sm">
                    {{ $item->visi }}
                </p>
            </div>

            <div class="text-center">
                <h2 class="text-2xl text-gray-800 mb-8">Misi</h2>
                <p class="text-gray-600 leading-relaxed text-sm whitespace-pre-line">
                    {{ $item->misi1 }}
                    {{ $item->misi2 }}
                    {{ $item->misi3 }}
                </p>
            </div>
        </div>
        @endforeach

    </div>
</section>
</main>
@endsection
