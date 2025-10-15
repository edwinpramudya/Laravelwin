@extends('layouts.admin')

@section('title', 'Edit Visi Misi')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Edit Visi Misi</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.visimisi.update', $visi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Visi -->
                            <div class="mb-3">
                                <label for="visi" class="form-label fw-semibold">Visi</label>
                                <input type="text" name="visi" id="visi"
                                       value="{{ old('visi', $visi->visi) }}"
                                       class="form-control @error('visi') is-invalid @enderror">
                                @error('visi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Misi 1 -->
                            <div class="mb-3">
                                <label for="misi1" class="form-label fw-semibold">Misi 1</label>
                                <textarea name="misi1" id="misi1" rows="5"
                                          class="form-control @error('misi1') is-invalid @enderror">{{ old('misi1', $visi->misi1) }}</textarea>
                                @error('misi1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Misi 2 -->
                            <div class="mb-3">
                                <label for="misi2" class="form-label fw-semibold">Misi 2</label>
                                <textarea name="misi2" id="misi2" rows="5"
                                          class="form-control @error('misi2') is-invalid @enderror">{{ old('misi2', $visi->misi2) }}</textarea>
                                @error('misi2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Misi 3 -->
                            <div class="mb-3">
                                <label for="misi3" class="form-label fw-semibold">Misi 3</label>
                                <textarea name="misi3" id="misi3" rows="5"
                                          class="form-control @error('misi3') is-invalid @enderror">{{ old('misi3', $visi->misi3) }}</textarea>
                                @error('misi3')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('admin.visimisi.index') }}" class="btn btn-secondary">
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