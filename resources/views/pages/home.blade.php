@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1 class="m-5">Public</h1>
        <h1 class="m-5">Projects</h1>
        <ul>
            @foreach ($projects as $project)
                <li>
                    Name: {{ $project -> name }}<br>
                    Description: {{ $project -> description }}<br>
                    Image: {{ $project -> main_image }}<br>
                    Release: {{ $project -> release_date }}<br>
                    Repo-Link: {{ $project -> repo_link }}<br>
                    <br>
                </li>
            @endforeach
        </ul>
    </div>
@endsection



    