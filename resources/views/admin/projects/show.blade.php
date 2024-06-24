@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header">
            <h1 class="mb-0">{{ $project->title }}</h1>
        </div>
        <div class="card-body">
            <p>{{ $project->description }}</p>
            <p>Slug: {{ $project->slug }}</p>
        </div>
    </div>
</div>
@endsection