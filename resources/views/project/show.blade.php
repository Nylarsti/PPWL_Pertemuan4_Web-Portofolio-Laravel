@extends('layouts.app')

@section('title', $project->title . ' - My Portfolio')

@section('content')
    <section class="page-header">
        <h1>{{ $project->title }}</h1>
    </section>

    <span class="tech-badge">{{ $project->tech }}</span>
    <p>{{ $project->description }}</p>

    <div class="project-actions">
        <a href="{{ route('project.edit', $project->id) }}" class="btn btn-edit">Edit</a>

        <form action="{{ route('project.destroy', $project->id) }}" method="POST"
              onsubmit="return confirm('Yakin ingin menghapus project ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-delete">Delete</button>
        </form>

        <a href="{{ route('projects') }}" class="btn btn-outline">Back to List</a>
    </div>
@endsection