@extends('layouts.main-layout')

@section('content')
<div class="container">
    <h1 class="m-5">Project</h1>
    <ul class="m-5">
        <li class="project d-flex align-items-center">
            <div>
                <img src="{{$project->main_image}}" alt="{{$project->main_image}}">
            </div>
            <div class="mx-3">
                Name: {{ $project -> name }}<br>
                Description: {{ $project -> description }}<br>
                Release: {{ $project -> release_date }}<br>
                Repo-Link: {{ $project -> repo_link }}<br>
            </div>
        </li>
    </ul>
</div>
@endsection