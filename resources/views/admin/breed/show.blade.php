@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ redirect()->back() }}">Back</a>
        </div>
        <div class="col-12">
            <h3>Show {{ $breed->name }}</h3>
        </div>
        <div class="col-4">
            <table class="table border">
                <tbody>
                <tr>
                    <th scope="row">id</th>
                    <td>{{ $breed->id }}</td>
                </tr>
                <tr>
                    <th scope="row">Kind</th>
                    <td>{{ $breed->getNameKind($breed->kind_id) }}</td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{ $breed->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Created</th>
                    <td>{{ $breed->created_at }}</td>
                </tr>
                <tr>
                    <th scope="row">Updated</th>
                    <td>{{ $breed->updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
