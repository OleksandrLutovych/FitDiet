@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col" style="text-align: right;"><a href="{{ route('pageContent.create') }}"
                    class="btn btn-success">Add new page</a></div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Page Name</th>
                            <th>Add Date</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        Content
                        @foreach ($content as $pageContent)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $pageContent->pagename }}
                                </td>
                                <td>{{ $pageContent->created_at->format('d.m.Y') }}</td>
                                <td>{{ $pageContent->pagetitle }}</td>
                                <td>
                                    <a href="{{ route('pageContent.create', $pageContent) }}" class="btn btn-warning">Edytuj</a>
                                    <a href="{{ route('pageContent.create', $pageContent) }}" class="btn btn-danger">Usuń</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
