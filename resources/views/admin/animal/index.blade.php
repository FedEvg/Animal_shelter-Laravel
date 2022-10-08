@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Animals</h3>
        </div>
        <div class="col-7">
            <table class="table table-striped border">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kind</th>
                    <th scope="col">Breed</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Size</th>
                    <th scope="col">Sterilization</th>
                    <th scope="col"></th>
                    <th scope="col"><a href="{{ route('admin.animal.create') }}"><button class="border-0 bg-transparent text-success">Add</button></a></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($animals as $animal)
                    <tr>
                        <th scope="row">{{ $animal->id }}</th>
                        <td>{{ $animal->name }}</td>
                        <td>
                            {{ $animal->breed->getNameKind($animal->breed->kind_id) }}
                        </td>
                        <td>
                            {{ $animal->breed->name }}
                        </td>
                        <td>
                            {{ $animal->getNameGender($animal->gender_id) }}
                        </td>
                        <td>
                            {{ $animal->getNameSize($animal->size_id) }}
                        </td>
                        <td>
                            {{ $animal->getNameSterilization($animal->sterilization_id) }}
                        </td>
                        <td>
                            <a href="{{ route('admin.animal.show', $animal->id) }}">
                                <button class="border-0 bg-transparent text-primary">Show</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.animal.edit', $animal->id) }}">
                                <button class="border-0 bg-transparent text-warning">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.animal.destroy', $animal->id) }}">
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
