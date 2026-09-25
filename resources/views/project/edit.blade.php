@extends('layouts.app')

@section('title', 'Edit Project - My Portfolio')

@section('content')
    <section class="page-header">
        <h1>Edit Project</h1>
    </section>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('project.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Judul Project</label>
            <input type="text" id="title" name="title" value="{{ old('title', $project->title) }}">
        </div>

        <div class="form-group">
            <label for="tech">Teknologi yang Digunakan</label>
            <input type="text" id="tech" name="tech" value="{{ old('tech', $project->tech) }}">
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" rows="5">{{ old('description', $project->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Project</button>
    </form>
@endsection