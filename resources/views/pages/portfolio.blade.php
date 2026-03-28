<h1>My Projects</h1>

@foreach($projects as $project)
    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>
@endforeach