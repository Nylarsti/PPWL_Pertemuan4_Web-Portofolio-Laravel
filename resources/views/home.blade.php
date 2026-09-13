@extends('layouts.app')

@section('title', 'Home - My Portfolio')

@section('content')
    <section class="hero">
        <div class="hero-text">
            <p class="hero-eyebrow">Halo, perkenalkan</p>
            <h1>Saya Nayla Larasati</h1>
            <p class="hero-desc">
                Seorang mahasiswa Software Engineering yang mengeksplorasi desain digital untuk membangun pengalaman pengguna yang lebih baik.
            </p>

            <div class="hero-actions">
                <a href="{{ route('projects') }}" class="btn btn-primary">Lihat Project</a>
                <a href="{{ route('about') }}" class="btn btn-outline">Tentang Saya</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/profile.JPG') }}" alt="Foto Nayla Larasati">
        </div>
    </section>
@endsection