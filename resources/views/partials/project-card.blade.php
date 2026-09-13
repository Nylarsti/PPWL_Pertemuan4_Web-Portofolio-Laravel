<div class="project-card">
    <h3>{{ $project['title'] }}</h3>
    <p>{{ $project['description'] }}</p>

    <div class="project-tags">
        @foreach ($project['tags'] as $tag)
            <span class="tag">{{ $tag }}</span>
        @endforeach
    </div>
</div>
