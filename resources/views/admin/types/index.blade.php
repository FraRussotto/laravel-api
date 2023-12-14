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

        <form action="{{ route('admin.types.store') }}" method="POST" class="d-flex">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control mt-3" placeholder="Inserisci una nuova tipologia" name="name">
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
                @foreach ($types as $type)
                    <tr>
                        <td>
                            <form action="{{ route('admin.types.update', $type) }}" method="POST" id="form-edit">
                                @csrf
                                @method('PUT')
                                <input type="text" class="form-hidden" value="{{ $type->name }}" name="name">
                            </form>
                        </td>
                        <td>
                            <button onclick="submitForm()" class="btn btn-warning" id="button-addon2"><i
                                    class="fa-solid fa-pencil"></i></button>

                            @include('admin.partials.delete', [
                                'route' => route('admin.types.destroy', $type),
                                'message' => 'Vuoi eliminare questa tipologia?',
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function submitForm() {
            const form = document.getElementById('form-edit');
            form.submit();
        }
    </script>
@endsection
