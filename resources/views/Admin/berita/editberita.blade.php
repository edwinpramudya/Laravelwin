@extends('layouts.admin')

@section('title', 'Edit berita')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Edit Berita</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Judul -->
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-semibold">Judul</label>
                                <input type="text" name="judul" id="judul"
                                       value="{{ old('judul', $berita->judul) }}"
                                       class="form-control @error('judul') is-invalid @enderror">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Isi -->
                            <div class="mb-3">
                                <label for="isi" class="form-label fw-semibold">Isi</label>
                                <textarea name="isi" id="isi" rows="5"
                                          class="form-control @error('isi') is-invalid @enderror">{{ old('isi', $berita->isi) }}</textarea>
                                @error('isi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal -->
                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal"
                                       value="{{ old('tanggal', \Carbon\Carbon::parse($berita->tanggal)->format('Y-m-d')) }}"
                                       class="form-control @error('tanggal') is-invalid @enderror">
                                @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Gambar -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-semibold">Gambar</label>
                                
                                @if($berita->gambar)
                                    <div class="mb-3">
                                        <img src="{{ asset('img/berita/'.$berita->gambar) }}" 
                                             alt="{{ $berita->judul }}" 
                                             class="img-thumbnail rounded"
                                             style="width: 160px; height: 112px; object-fit: cover;">
                                    </div>
                                @endif

                                <input type="file" name="gambar" id="gambar" class="form-control">
                                <div class="form-text">Kosongkan jika tidak ingin mengganti gambar.</div>
                            </div>

                            <!-- Tombol -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-1"></i> Batal
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection