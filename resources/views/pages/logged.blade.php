@extends('layouts.main-layout')

@section('head')
<title>Logged</title>

@section('content')
    <div class="container">
        <h1 class="m-5">Logged</h1>
        <h1 class="m-5 ">Projects</h1>
        <a class="m-5 text-danger" href="{{ route('project.create') }}">Create a New Project</a>
        <ul class="m-5">
            @foreach ($projects as $project)
                <li class="project d-flex align-items-center">
                    <a href="{{ route('loggedProject.show', $project) }}">
                        <div>
                            <img src="{{ asset('storage/' . $project -> main_image) }}" alt="">
                        </div>
                        <div class="mx-3 w-100">
                            Name: {{ $project -> name }}<br>
                            Description: {{ $project -> description }}<br>
                            Release: {{ $project -> release_date }}<br>
                            Repo-Link: <a href="{{ $project -> repo_link }}">GitHub</a>
                        </div>
                    </a>
                    <a href="{{ route('project.delete', $project) }}" class="delete">X</a>
                    <a href="{{ route('project.edit', $project) }}" class="edit">
                        EDIT
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection