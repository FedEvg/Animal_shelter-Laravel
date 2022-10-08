@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('admin.animal.index') }}">Back</a>
        </div>
        <div class="col-12">
            <h3>Add animal</h3>
        </div>
        <div class="col-4">
            <form method="POST" action="{{ route('admin.animal.update', $animal->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $animal->name }}">
                </div>
                <p class="text-danger">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-group">
                    <label>Select a breed</label>
                    <select class="form-select" name="breed_id" aria-label="Default select example">
                        @foreach($breeds as $breed)
                            <option value="{{ $breed->id }}"
                                {{ $breed->id == $animal->breed_id ? ' selected' : '' }}
                            >{{ $breed->name }}</option>
                        @endforeach
                    </select>
                </div>
                <p class="text-danger">
                    @error('breed_id')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-group">
                    <label>Select a gender</label>
                    <select class="form-select" name="gender_id" aria-label="Default select example">
                        @foreach($genders as $id => $gender)
                            <option value="{{ $id }}"
                                {{ $id == $animal->gender_id ? ' selected' : '' }}
                            >{{ $gender }}</option>
                        @endforeach
                    </select>
                </div>
                <p class="text-danger">
                    @error('gender_id')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-group">
                    <label>Select a size</label>
                    <select class="form-select" name="size_id" aria-label="Default select example">
                        @foreach($sizes as $id => $size)
                            <option value="{{ $id }}"
                                {{ $id == $animal->size_id ? ' selected' : '' }}
                            >{{ $size }}</option>
                        @endforeach
                    </select>
                </div>
                <p class="text-danger">
                    @error('size_id')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-group">
                    <label>Select a sterilization</label>
                    <select class="form-select" name="sterilization_id" aria-label="Default select example">
                        @foreach($sterilizations as $id => $sterilization)
                            <option value="{{ $id }}"
                                {{ $id == $animal->sterilization_id ? ' selected' : '' }}
                            >{{ $sterilization }}</option>
                        @endforeach
                    </select>
                </div>
                <p class="text-danger">
                    @error('sterilization_id')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-group">
                    <label>Age</label>
                    <input type="date" class="form-control" name="age" placeholder="Enter data" value="{{ $animal->age }}">
                </div>
                <p class="text-danger">
                    @error('age')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="desc">{{ $animal->desc }}</textarea>
                </div>
                <p class="text-danger">
                    @error('desc')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
