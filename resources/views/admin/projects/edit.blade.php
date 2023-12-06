@extends('layouts.admin')

@section('content')
    <h3 class="text-center mb-5">Inserimento nuovo prodotto</h3>
    <div class="container">
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="title"
                    value="{{ $project['name'] }}">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control" id="date" name="date" aria-describedby="title"
                    value="{{ $project['date'] }}">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Descrizione prodotto" id="description" name="description"
                    style="height: 200px">{{ $project['description'] }}</textarea>
                <label for="floatingTextarea2">Exercise's description</label>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control" id="link" name="link" aria-describedby="title"
                    value="{{ $project['link'] }}">
            </div>
            <div class="text-center">

                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </form>
    </div>
@endsection
