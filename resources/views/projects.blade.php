@extends('layouts.app')

@section('title', 'Projects - My Portfolio')

@section('content')
    <section class="page-header">
        <h1>Projects</h1>
        <p>Beberapa proyek kuliah yang pernah saya kerjakan.</p>
    </section>

    <a href="{{ route('project.create') }}" class="btn btn-primary">+ Tambah Project</a>

    <section class="project-grid">
        @foreach ($projects as $project)
            <div class="project-card">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                <span class="tech-badge">{{ $project->tech }}</span>
            </div>
        @endforeach
    </section>
@endsection
