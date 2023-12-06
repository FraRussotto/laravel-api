@extends('layouts.admin')

@section('content')
    <h1>Elenco progetti per tipologia</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Nome progetto</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row">{{ $type->id }}</th>
                    <td>{{ $type->name }}</td>
                    <td>
                        <ul class="list-group">
                            @foreach ($type->projects as $project)
                                <a href="{{ route('admin.projects.show', $project) }}">
                                    {{ $project->name }}
                                </a>
                            @endforeach
                        </ul>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
