@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    {{-- Card Statistik --}}
    <div class="row">
        {{-- Card Total Pengunjung --}}
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-eye fa-2x me-3"></i>
                        <div>
                            <div class="small">Total Kunjungan</div>
                            <h3 class="mb-0">{{ number_format($totalVisitors) }}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.visitors') }}">
                        Lihat Detail
                    </a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel Kunjungan Terbaru --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-history me-1"></i>
            5 Kunjungan Terbaru
        </div>
        <div class="card-body">
            @if($recentVisitors->isEmpty())
                <div class="alert alert-info text-center" role="alert">
                    <i class="fas fa-info-circle me-2"></i>
                    Belum ada kunjungan tercatat.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th width="15%">Waktu</th>
                                <th width="15%">IP Address</th>
                                <th width="40%">Halaman</th>
                                <th width="30%">Browser</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentVisitors as $visit)
                            <tr>
                                <td>
                                    <small>
                                        {{ $visit->created_at ? $visit->created_at->format('d/m/Y') : '-' }}<br>
                                        {{ $visit->created_at ? $visit->created_at->format('H:i') : '-' }}
                                    </small>
                                </td>
                                <td><code>{{ $visit->ip_address ?? '-' }}</code></td>
                                <td><small>{{ $visit->page_url ? Str::limit($visit->page_url, 50) : '-' }}</small></td>
                                <td><small class="text-muted">{{ $visit->user_agent ? Str::limit($visit->user_agent, 35) : '-' }}</small></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

@endsection
