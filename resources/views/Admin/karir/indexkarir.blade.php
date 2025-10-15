@extends('layouts.admin')

@section('title', 'Daftar Karir')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Daftar Karir</h1>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div></div>
            <a href="{{ route('admin.karir.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus me-1"></i> Tambah Karir
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                @if($karirs->isEmpty())
                    <div class="text-center py-4 text-muted">
                        Belum ada data karir.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>Jabatan</th>
                                    <th>Deskripsi</th>
                                    <th>Umur</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($karirs as $k)
                                <tr>
                                    <td>{{ $k->jenis_kelamin }}</td>
                                    <td>{{ $k->jabatan }}</td>
                                    <td>{{ Str::limit($k->deskripsi, 50) }}</td>
                                    <td>{{ $k->umur }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.karir.edit', $k->id) }}" 
                                           class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.karir.destroy', $k->id) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Yakin hapus data ini?')">
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