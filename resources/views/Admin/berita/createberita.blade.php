@extends('layouts.admin')

@section('title', 'Create Berita')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Tambah Berita</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Judul -->
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-semibold">Judul</label>
                                <input type="text" name="judul" id="judul" value="{{ old('judul') }}"
                                       class="form-control @error('judul') is-invalid @enderror">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Isi -->
                            <div class="mb-3">
                                <label for="isi" class="form-label fw-semibold">Isi</label>
                                <textarea name="isi" id="isi" rows="5"
                                          class="form-control @error('isi') is-invalid @enderror">{{ old('isi') }}</textarea>
                                @error('isi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Gambar -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-semibold">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal -->
                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}"
                                       class="form-control @error('tanggal') is-invalid @enderror">
                                @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-save me-2"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection