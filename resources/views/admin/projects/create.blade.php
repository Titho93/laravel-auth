@extends('layouts.admin')

@section('content')
    <div class="container p-4">
        <h1 class="d-inline-block p-4">Insert New Projects</h1>
        <button class="btn btn-danger"><a class="nav-link" href="{{ route('admin.projects.index') }}">Return</a></button>

        <div class="row">
            <div class="col-8">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="dateformat" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-floating mb-5">
                        <textarea class="form-control" placeholder="Description" id="description" name="description" style="height: 200px"></textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>

                    <button type="submit" class="btn btn-success">Send</button>
                    <button type="reset" class="btn btn-secondary">Retry</button>

                </form>
            </div>
        </div>

    </div>
@endsection
