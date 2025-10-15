@extends('layouts.admin')

@section('title', 'Edit Company')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Edit Company</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.company.update', $comp->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Gambar -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-semibold">Gambar</label>
                                
                                @if($comp->gambar)
                                    <div class="mb-3">
                                        <img src="{{ asset('img/company/'.$comp->gambar) }}" 
                                             alt="{{ $comp->judul }}" 
                                             class="img-thumbnail rounded"
                                             style="width: 160px; height: 112px; object-fit: cover;">
                                    </div>
                                @endif

                                <input type="file" name="gambar" id="gambar" class="form-control">
                                <div class="form-text">Kosongkan jika tidak ingin mengganti gambar.</div>
                            </div>

                            <!-- Tombol -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('admin.company.index') }}" class="btn btn-secondary">
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