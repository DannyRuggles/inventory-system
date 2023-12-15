@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1>Edit Category</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="category_name">Category Name:</label>
                <input type="text" name="category_name" id="category_name" class="form-control" value="{{ old('category_name', $category->category_name) }}">
                @error('category_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

    

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection