@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1>Create Category</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="category_name">Category Name:</label>
                <input type="text" name="category_name" id="category_name" class="form-control" value="{{ old('category_name') }}">
                @error('category_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Add other category fields here -->

            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
@endsection