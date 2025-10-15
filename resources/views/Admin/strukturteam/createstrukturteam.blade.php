@extends('layouts.admin')

@section('title', 'Create Struktur Team')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Tambah Struktur Team</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.strukturteam.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Upload Gambar -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Upload Gambar</label>
                                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <a href="{{ route('admin.strukturteam.index') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection