@extends('layouts.admin')

@section('title', 'Edit Karir')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Edit Karir</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.karir.update', $karir->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Jenis Kelamin -->
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin (laki-laki/perempuan)</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin"
                                       value="{{ old('jenis_kelamin', $karir->jenis_kelamin) }}"
                                       class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Jabatan -->
                            <div class="mb-3">
                                <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
                                <input type="text" name="jabatan" id="jabatan"
                                       value="{{ old('jabatan', $karir->jabatan) }}"
                                       class="form-control @error('jabatan') is-invalid @enderror">
                                @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="4"
                                          class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $karir->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Umur -->
                            <div class="mb-3">
                                <label for="umur" class="form-label fw-semibold">Umur</label>
                                <input type="number" name="umur" id="umur"
                                       value="{{ old('umur', $karir->umur) }}"
                                       class="form-control @error('umur') is-invalid @enderror"
                                       min="18" max="65">
                                @error('umur')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('admin.karir.index') }}" class="btn btn-secondary">
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