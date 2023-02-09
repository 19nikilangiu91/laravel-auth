@extends('layouts.main-layout')

@section('content')
    
    <h1 class="m-5">Edit Project</h1>
    <form method="POST" action="{{ route('project.update', $project) }}" class="m-5">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value={{$project->name}}>
        <br>
        <label for="description">Description:</label>
        <input type="text" name="description" value={{$project->description}}>
        <br>
        <label for="main_image">Main Image:</label>
        <input type="text" name="main_image" value={{$project->main_image}}>
        <br>
        <label for="release_date">Release Date:</label>
        <input type="date" name="release_date" value={{$project->release_date}}>
        <br>
        <label for="repo_link">Repo Link:</label>
        <input type="text" name="repo_link" value={{$project->repo_link}}>
        <br>
        <input type="submit" value="Update Project">
    </form>

@endsection