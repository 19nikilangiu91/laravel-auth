@extends('layouts.main-layout')

@section('head')
<title>Logged</title>

@section('content')
    <div class="container">
        <h1 class="m-5">Logged</h1>
        <h1 class="m-5">Projects</h1>
        <a class="m-5" href="{{ route('project.create') }}">Create a New Project</a>
        <ul class="m-5">
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('loggedProject.show', $project) }}">
                        ID: {{ $project -> id }}<br>
                        Name: {{ $project -> name }}<br>
                        Description: {{ $project -> description }}<br>
                        Image: {{ $project -> main_image }}<br>
                        Release: {{ $project -> release_date }}<br>
                        Repo-Link: {{ $project -> repo_link }}<br>
                    </a>
                    <br>
                    <a href="{{ route('project.delete', $project) }}">X</a>
                    <a href="{{ route('project.edit', $project) }}" class="edit">
                        EDIT
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection