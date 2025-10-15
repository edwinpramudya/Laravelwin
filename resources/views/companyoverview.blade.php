@extends('layouts.utama')

@section('title', 'Home')

@section('content')

 <section class="py-16">
  <div class="max-w-3xl mx-auto px-6 text-center">
    <h1 class="text-4xl text-gray-800 mb-8">Sekilas Tentang Perusahaan</h1>
    <p class="text-gray-600 leading-relaxed">
      Hayyu Pratama Dealer berdiri sejak tahun 2021 menjadi perusahaan distributor alat berat yang terletak di Kota Samarinda, Kalimantan Timur. 
      Perusahaan kami telah dipercaya sebagai distributor resmi yang telah melayani banyak lini sektor khususnya pada sektor pertambangan. 
      Hingga tahun 2022 Hayyu Pratama Dealer telah mengembangkan produknya dengan menjadi distributor alat berat seperti UD Trucks, Sunward dan Shacman.
    </p>
    @foreach ($comp as $item)
    <img src="{{ asset('img/company/' . $item->gambar) }}" alt="" class="mt-8">
    @endforeach
  </div>
</section>


@endsection