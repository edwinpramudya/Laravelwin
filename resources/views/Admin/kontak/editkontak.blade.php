@extends('layouts.admin')

@section('title', 'Daftar Kontak')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Edit Kontak</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.kontak.update', $kontaks->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- No HP -->
                            <div class="mb-3">
                                <label for="no_hp" class="form-label fw-semibold">NO HP</label>
                                <input type="number" name="no_hp" id="no_hp"
                                       value="{{ old('no_hp', $kontaks->no_hp) }}"
                                       class="form-control @error('no_hp') is-invalid @enderror">
                                @error('no_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <textarea name="email" id="email" rows="1"
                                          class="form-control @error('email') is-invalid @enderror">{{ old('email', $kontaks->email) }}</textarea>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="2"
                                          class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $kontaks->alamat) }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('admin.kontak.index') }}" class="btn btn-secondary">
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