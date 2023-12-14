@extends('layouts.admin')

@section('content')
    <h3 class="text-center mb-5">Inserimento nuovo prodotto</h3>
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <p>Uno o più campi non sono compilati correttamente.</p>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    aria-describedby="title" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                    aria-describedby="title" value="{{ old('date') }}">
                @error('date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <p>Seleziona la tecnologia usata:</p>
            <div class="mb-3 d-flex justify-content-center btn-group" role="group"
                aria-label="Basic checkbox toggle button group">
                @foreach ($tecnologies as $tecnology)
                    <input type="checkbox" class="btn-check" id="btn_{{ $tecnology->id }}" autocomplete="off"
                        name="tecnologies[]" value="{{ $tecnology->id }}">
                    <label class="btn btn-outline-primary" for="btn_{{ $tecnology->id }}">{{ $tecnology->name }}</label>
                @endforeach
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Descrizione prodotto"
                    id="description" name="description" style="height: 200px">{{ old('description') }}</textarea>
                <label for="floatingTextarea2">Description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image" aria-describedby="title" value="{{ old('image') }}">
                @error('image')
                    <p class="text-danger">{{ $image }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                    aria-describedby="title" value="{{ old('link') }}">
                @error('link')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="text-center">

                <button type="submit" class="btn btn-primary">Crea</button>
                <button type="reset" class="btn btn-warning">Reset</button>

            </div>
        </form>
    </div>
@endsection
