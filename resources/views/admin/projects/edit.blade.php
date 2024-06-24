@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Modifica Progetto</h1>


    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
</div>
@endsection