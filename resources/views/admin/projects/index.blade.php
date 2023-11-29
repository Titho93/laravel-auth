@extends('layouts.admin')

@section('content')
    <h1>Projects List</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->date }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('admin.projects.show', $project) }}">Info</a>
                        <a class="btn btn-success" href="{{ route('admin.projects.create', $project) }}">+</a>
                        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->id) }}"
                            method="POST" onsubmit="return confirm ('Are you sure DELETE this Project?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
