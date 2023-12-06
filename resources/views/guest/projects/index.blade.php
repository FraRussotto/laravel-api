@extends('layouts.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->date }}</td>
                    <td>{!! $project->description !!}</td>
                    <td><a href="{{ $project->link }}">{{ $project->link }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
