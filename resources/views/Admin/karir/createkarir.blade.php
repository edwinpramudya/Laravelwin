@extends('layouts.admin')

@section('title', 'Create Karir')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Tambah Karir</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.karir.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Jenis Kelamin -->
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin"
                                        class="form-select @error('jenis_kelamin') is-invalid @enderror">
                                    <option value="" disabled {{ old('jenis_kelamin') == '' ? 'selected' : '' }}>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Jabatan -->
                            <div class="mb-3">
                                <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
                                <textarea name="jabatan" id="jabatan" rows="1"
                                          class="form-control @error('jabatan') is-invalid @enderror">{{ old('jabatan') }}</textarea>
                                @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="5"
                                          class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Umur -->
                            <div class="mb-3">
                                <label for="umur" class="form-label fw-semibold">Umur</label>
                                <input type="number" name="umur" id="umur" value="{{ old('umur') }}"
                                       min="18" max="65"
                                       class="form-control @error('umur') is-invalid @enderror">
                                @error('umur')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol Simpan -->
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
