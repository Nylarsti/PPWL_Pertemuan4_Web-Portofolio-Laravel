@extends('layouts.app')

@section('title', $project->title . ' - My Portfolio')

@section('content')
    <section class="page-header">
        <h1>{{ $project->title }}</h1>
    </section>

    <span class="tech-badge">{{ $project->tech }}</span>
    <p>{{ $project->description }}</p>
@endsection
