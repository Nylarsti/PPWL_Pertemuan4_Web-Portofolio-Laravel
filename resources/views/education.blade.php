@extends('layouts.app')

@section('title', 'Education - My Portfolio')

@php
    $riwayatPendidikan = [
        [
            'jenjang' => 'Teknologi Rekayasa Perangkat Lunak',
            'institusi' => 'Sekolah Vokasi, Universitas Gadjah Mada',
            'keterangan' => 'Sedang berlangsung',
        ],
        [
            'jenjang' => 'Rekayasa Perangkat Lunak',
            'institusi' => 'SMK Negeri 1 Cimahi',
            'keterangan' => 'Selesai',
        ],
    ];
@endphp

@section('content')
    <section class="page-header">
        <h1>Riwayat Pendidikan</h1>
    </section>

    <section class="timeline">
        @forelse ($riwayatPendidikan as $item)
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>{{ $item['jenjang'] }}</h3>
                    <p class="timeline-institusi">{{ $item['institusi'] }}</p>
                    <span class="timeline-badge">{{ $item['keterangan'] }}</span>
                </div>
            </div>
        @empty
            <p>Belum ada data riwayat pendidikan.</p>
        @endforelse
    </section>
@endsection
