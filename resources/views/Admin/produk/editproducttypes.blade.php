@extends('layouts.admin')

@section('title', 'Edit Produk Tipe')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Edit Product Type</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('admin.product-types.update', $type->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-semibold">Name</label>
                                <input type="text" id="nama" name="nama"
                                       value="{{ old('nama', $type->nama) }}"
                                       class="form-control @error('nama') is-invalid @enderror" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Product -->
                            <div class="mb-3">
                                <label for="product_id" class="form-label fw-semibold">Product</label>
                                <select id="product_id" name="product_id"
                                        class="form-select @error('product_id') is-invalid @enderror">
                                    <option value="">Pilih Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}" {{ $type->product_id == $product->id ? 'selected' : '' }}>
                                            {{ $product->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Gambar -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-semibold">Gambar (opsional)</label>
                                <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if($type->gambar)
                                    <div class="mt-3">
                                        <p class="form-text">Gambar saat ini:</p>
                                        <img src="{{ asset('img/produk/'.$type->gambar) }}" 
                                             alt="current" 
                                             class="img-thumbnail rounded"
                                             style="width: 128px; height: 128px; object-fit: cover;">
                                    </div>
                                @endif
                            </div>

                            <!-- PDF -->
                            <div class="mb-3">
                                <label for="pdf" class="form-label fw-semibold">PDF (opsional)</label>
                                <input type="file" id="pdf" name="pdf" class="form-control @error('pdf') is-invalid @enderror" accept=".pdf">
                                @error('pdf')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if($type->pdf)
                                    <div class="mt-3">
                                        <p class="form-text">PDF saat ini: 
                                            <a href="{{ asset('pdf/produk/'.$type->pdf) }}" target="_blank">{{ $type->pdf }}</a>
                                        </p>
                                    </div>
                                @endif
                            </div>

                            <!-- Tombol -->
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <a href="{{ route('admin.product-types.index') }}" class="btn btn-secondary">
                                    Batal
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
