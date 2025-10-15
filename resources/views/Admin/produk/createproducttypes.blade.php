@extends('layouts.admin')

@section('title', 'Create Produk Tipe')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Tambah Product Type</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.product-types.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Pilih Product -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Pilih Product</label>
                                <select name="product_id" class="form-select @error('product_id') is-invalid @enderror" required>
                                    <option value="">Pilih Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->nama }}</option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Type -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Type</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Upload Gambar -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Upload Gambar (opsional)</label>
                                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Upload PDF -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Upload PDF (opsional)</label>
                                <input type="file" name="pdf" class="form-control @error('pdf') is-invalid @enderror" accept=".pdf">
                                @error('pdf')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <a href="{{ route('admin.product-types.index') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
