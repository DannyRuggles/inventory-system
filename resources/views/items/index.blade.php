@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Item List</h1>
        <a href="{{ route('items.create') }}" class="btn btn-primary mb-2">Add Item</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->category->category_name }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>${{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
