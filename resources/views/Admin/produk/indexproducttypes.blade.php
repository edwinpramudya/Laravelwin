@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Tipe Product</h1>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div></div>
            <a href="{{ route('admin.product-types.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus me-1"></i> Tambah Product Type
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                @if($types->isEmpty())
                    <div class="text-center py-4 text-muted">
                        Belum ada Product Types.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Gambar</th>
                                    <th>PDF</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($types as $type)
                                <tr>
                                    <td>{{ $type->product->nama ?? '-' }}</td>
                                    <td>{{ $type->nama }}</td>
                                    <td>
                                        @if($type->gambar)
                                            <img src="{{ asset('img/produk/'.$type->gambar) }}" 
                                                 alt="{{ $type->nama }}" 
                                                 class="img-thumbnail rounded"
                                                 style="width: 64px; height: 64px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.product-types.edit', $type->id) }}" 
                                           class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.product-types.destroy', $type->id) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Yakin hapus Product Type ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection