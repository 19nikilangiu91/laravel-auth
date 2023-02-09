@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1 class="m-5">Public</h1>
        <h1 class="m-5">Projects</h1>
        <ul class="m-5">
            @foreach ($projects as $project)
                <li class="project d-flex justify-content-center align-items-center">
                    <a href="{{ route('project.show', $project) }}" class="d-flex">
                        <div>
                            <img src="{{$project->main_image}}" alt="{{$project->main_image}}">
                        </div>
                        <div class="mx-3">
                            Name: {{ $project -> name }}<br>
                            Description: {{ $project -> description }}<br>
                            Release: {{ $project -> release_date }}<br>
                            Repo-Link: {{ $project -> repo_link }}<br>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection



    