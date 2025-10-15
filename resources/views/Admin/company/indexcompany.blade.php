@extends('layouts.admin')

@section('title', 'Company Profile')

@section('content')
    <div class="container-fluid px-4">
        <h2 class="mt-4 mb-3">Company</h2>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div></div> <!-- Spacer -->
            <a href="{{ route('admin.company.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus me-1"></i> Tambah
            </a>
        </div>

        <div class="card">
            <div class="card-body p-0">
                @if($comp->isEmpty())
                    <div class="text-center py-4 text-muted">
                        Belum ada company.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Gambar</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comp as $n)
                                <tr>
                                    <td>
                                        @if($n->gambar)
                                            <img src="{{ asset('img/company/'.$n->gambar) }}" 
                                                 alt="Gambar company"
                                                 class="img-thumbnail rounded"
                                                 style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.company.edit', $n->id) }}" 
                                           class="btn btn-sm btn-outline-primary me-1"
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.company.destroy', $n->id) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Yakin hapus gambar ini?')">
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