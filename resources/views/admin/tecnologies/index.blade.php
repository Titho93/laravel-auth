@extends('layouts.admin')

@section('content')
    <h1>Tecnologies List</h1>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.tecnologies.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="New Tecnologies" name="name">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">New</button>
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tecnologies as $tecnology)
                        <tr>
                            <td>{{ $tecnology->name }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('admin.tecnologies.show', $tecnology) }}">Info</a>
                                <form class="d-inline-block"
                                    action="{{ route('admin.tecnologies.destroy', $tecnology->id) }}" method="POST"
                                    onsubmit="return confirm ('Are you sure DELETE this Tecnology?')">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection