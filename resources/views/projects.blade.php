@extends('layouts.app')

@section('title', 'Projects - My Portfolio')

@php
    $daftarProjects = [
        [
            'nama' => 'Serenity Spa Reservation',
            'deskripsi' => 'Sistem reservasi spa berbasis PHP & MySQL dengan CRUD, autentikasi, dan Bootstrap UI.',
            'tech' => 'PHP, MySQL, Bootstrap',
        ],
        [
            'nama' => 'Little Goblin Adventure',
            'deskripsi' => 'Game platformer 2D sederhana yang dibuat dengan Java untuk tugas mata kuliah OOP.',
            'tech' => 'Java, OOP',
        ]
    ];
@endphp

@section('content')
    <section class="page-header">
        <h1>Projects</h1>
        <p>Beberapa proyek kuliah yang pernah saya kerjakan.</p>
    </section>

    <section class="project-grid">
        @foreach ($daftarProjects as $project)
            <div class="project-card">
                <h3>{{ $project['nama'] }}</h3>
                <p>{{ $project['deskripsi'] }}</p>
                <span class="tech-badge">{{ $project['tech'] }}</span>
            </div>
        @endforeach
    </section>
@endsection
