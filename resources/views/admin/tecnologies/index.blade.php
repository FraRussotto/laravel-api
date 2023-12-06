@extends('layouts.admin')

@section('content')
    <div class="container w-50 mt-5 text-center border">

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <span>Il campo non è stato compilato correttamente.</span>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.tecnologies.store') }}" method="POST" class="d-flex">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control mt-3" placeholder="Inserisci una nuova tecnologia" name="name">
                <button type="submit" class="btn btn-primary mt-3">Invia</button>
            </div>
        </form>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnologies as $tecnology)
                    <tr>
                        <td>{{ $tecnology->name }}</td>
                        <td>
                            <a href="{{ route('admin.tecnologies.edit', $tecnology) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pencil"></i></a>
                            @include('admin.partials.delete', [
                                'route' => route('admin.tecnologies.destroy', $tecnology),
                                'message' => 'Vuoi eliminare questa tecnologia?',
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
