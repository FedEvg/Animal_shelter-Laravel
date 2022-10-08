@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Breeds</h3>
        </div>
        <div class="col-6">
            <table class="table table-striped border">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kind</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                    <th scope="col"><a href="{{ route('admin.breed.create') }}"><button class="border-0 bg-transparent text-success">Add</button></a></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($breeds as $breed)
                    <tr>
                        <th scope="row">{{ $breed->id }}</th>
                        <td>
                            {{ $breed->getNameKind($breed->kind_id) }}
                        </td>
                        <td>{{ $breed->name }}</td>
                        <td>
                            <a href="{{ route('admin.breed.show', $breed->id) }}">
                                <button class="border-0 bg-transparent text-primary">Show</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.breed.edit', $breed->id) }}">
                                <button class="border-0 bg-transparent text-warning">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.breed.destroy', $breed->id) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="border-0 bg-transparent text-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
