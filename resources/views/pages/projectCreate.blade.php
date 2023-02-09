@extends('layouts.main-layout')

@section('content')
    
    <h1 class="m-5">New Project</h1>
    <form method="POST" action="{{ route('project.store') }}" class="form m-5">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" class="name">
        <br>
        <label for="description">Description:</label>
        <input type="text" name="description" class="description">
        <br>
        <label for="main_image">Main Image:</label>
        <input type="text" name="main_image" class="main_image">
        <br>
        <label for="release_date">Release Date:</label>
        <input type="date" name="release_date" class="release_date">
        <br>
        <label for="repo_link">Repo Link:</label>
        <input type="text" name="repo_link" class="repo_link">
        <br>
        <input type="submit" value="Create New Project" class="button">
    </form>

@endsection