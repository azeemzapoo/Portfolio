
@extends('layouts.app')

@section('content')
<div class="projects-container">
    <h1>My Projects</h1>

    <div class="projects-grid">
        @foreach($projects as $project)
            <div class="project-card">
                <h2>{{ $project->title }}</h2>

                <p>{{ $project->description }}</p>

                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image">
                @endif

                <a href="{{ $project->github_url }}" target="_blank">View Project</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
