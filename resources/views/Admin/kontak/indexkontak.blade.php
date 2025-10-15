@extends('layouts.admin')

@section('title', 'Kontak')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Kontak</h1>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                @if($kontaks->isEmpty())
                    <div class="text-center py-4 text-muted">
                        Belum ada data kontak.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>NO HP</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kontaks as $k)
                                <tr>
                                    <td>{{ $k->no_hp }}</td>
                                    <td>{{ $k->email }}</td>
                                    <td>{{ Str::limit($k->alamat, 50) }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.kontak.edit', $k->id) }}" 
                                           class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
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