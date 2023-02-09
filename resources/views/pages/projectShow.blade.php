@extends('layouts.main-layout')

@section('content')
<div class="container">
    <h1 class="m-5">Project</h1>
    <ul class="m-5">
        <li class="m-5">
            Name: {{ $project -> name }}<br>
            Description: {{ $project -> description }}<br>
            Image: {{ $project -> main_image }}<br>
            Release: {{ $project -> release_date }}<br>
            Repo-Link: {{ $project -> repo_link }}<br>
        </li>
    </ul>
</div>
@endsection