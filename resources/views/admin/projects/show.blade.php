@extends('layouts.admin')

@section('content')
    <h1>{{ $project->name }}</h1>
    @php
        $date = date_create($project->date);
    @endphp
    <p>Creation Date {{ date_format($date, 'd/m/Y') }}</p>
    <p>Bio: {{ $project->description }}</p>
@endsection
