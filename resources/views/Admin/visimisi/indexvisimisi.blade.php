@extends('layouts.admin')

@section('title', 'Visi dan Misi')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Visi dan Misi</h1>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                @if($visim->isEmpty())
                    <div class="text-center py-4 text-muted">
                        Belum ada data visi dan misi.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Visi</th>
                                    <th>Misi 1</th>
                                    <th>Misi 2</th>
                                    <th>Misi 3</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($visim as $v)
                                <tr>
                                    <td>{{ Str::limit($v->visi, 30) }}</td>
                                    <td>{{ Str::limit($v->misi1, 30) }}</td>
                                    <td>{{ Str::limit($v->misi2, 30) }}</td>
                                    <td>{{ Str::limit($v->misi3, 30) }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.visimisi.edit', $v->id) }}" 
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