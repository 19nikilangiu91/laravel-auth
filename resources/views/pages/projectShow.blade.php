@extends('layouts.main-layout')

@section('content')
<div class="container">
    <h1 class="m-5">Project</h1>
    <ul class="m-5">
        <li class="project d-flex align-items-center">
            <div>
                <img src="{{ asset('storage/' . $project -> main_image) }}" alt="">
            </div>
            <div class="mx-3">
                Name: {{ $project -> name }}<br>
                Description: {{ $project -> description }}<br>
                Release: {{ $project -> release_date }}<br>
                Repo-Link: <a href="{{ $project -> repo_link }}">GitHub</a>
            </div>
        </li>
    </ul>
</div>
@endsection