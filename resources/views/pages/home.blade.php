@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1 class="m-5">Public</h1>
        <h1 class="m-5">Projects</h1>
        <ul class="m-5">
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('project.show', $project) }}">
                        Name: {{ $project -> name }}<br>
                        Description: {{ $project -> description }}<br>
                        Image: {{ $project -> main_image }}<br>
                        Release: {{ $project -> release_date }}<br>
                        Repo-Link: {{ $project -> repo_link }}<br>
                    </a>
                    <br>
                </li>
            @endforeach
        </ul>
    </div>
@endsection



    