@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Add breed</h3>
        </div>
        <div class="col-4">
            <form method="POST" action="{{ route('admin.breed.update', $breed->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>Select a kind</label>
                    <select class="form-select" name="kind_id" aria-label="Default select example">
                        @foreach($kinds as $id => $kind)
                            <option value="{{ $id }}"
                                {{ $id == $breed->kind_id ? ' selected' : ''}}
                            >{{ $kind }}</option>
                        @endforeach
                    </select>
                </div>
                <p class="text-danger">
                    @error('kind_id')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $breed->name }}">
                </div>
                <p class="text-danger">
                    @error('name')
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
