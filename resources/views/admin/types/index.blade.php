@extends('layouts.admin')

@section('content')
    <h1>Types List</h1>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.types.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="New Type" name="name">
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
                    @foreach ($types as $type)
                        <tr>
                            <td>{{ $type->name }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('admin.types.show', $type) }}">Info</a>
                                <form class="d-inline-block" action="{{ route('admin.types.destroy', $type->id) }}"
                                    method="POST" onsubmit="return confirm ('Are you sure DELETE this Type?')">

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
