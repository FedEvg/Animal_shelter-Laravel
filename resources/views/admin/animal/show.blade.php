@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('admin.animal.index') }}">Back</a>
        </div>
        <div class="col-12">
            <h3>Show {{ $animal->name }}</h3>
        </div>
        <div class="col-4">
            <table class="table border">
                <tbody>
                <tr>
                    <th scope="row">id</th>
                    <td>{{ $animal->id }}</td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{ $animal->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Kind</th>
                    <td>{{ $animal->breed->getNameKind($animal->breed->kind_id) }}</td>
                </tr>
                <tr>
                    <th scope="row">Breed</th>
                    <td>{{ $animal->breed->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Gender</th>
                    <td>{{ $animal->getNameGender($animal->gender_id) }}</td>
                </tr>
                <tr>
                    <th scope="row">Size</th>
                    <td>{{ $animal->getNameSize($animal->size_id) }}</td>
                </tr>
                <tr>
                    <th scope="row">Sterilization</th>
                    <td>{{ $animal->getNameSterilization($animal->sterilization_id) }}</td>
                </tr>
                <tr>
                    <th scope="row">Age</th>
                    <td>{{ $animal->age }}</td>
                </tr>
                <tr>
                    <th scope="row">Desc</th>
                    <td>{{ $animal->desc }}</td>
                </tr>
                <tr>
                    <th scope="row">Created</th>
                    <td>{{ $animal->created_at }}</td>
                </tr>
                <tr>
                    <th scope="row">Updated</th>
                    <td>{{ $animal->updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
