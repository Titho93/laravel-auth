@extends('layouts.admin')

@section('content')
    <div class="show w-100 p-3">
        <button class="btn btn-dark"><a class="nav-link" href="{{ route('admin.projects.index') }}"><i
                    class="fa-solid fa-rotate-left"></i></a></button>
        <h1>{{ $project->name }}</h1>
        @php
            $date = date_create($project->date);
        @endphp
        <p>Creation Date {{ date_format($date, 'd/m/Y') }}</p>
        <p>Bio: {{ $project->description }}</p>
    </div>
@endsection
