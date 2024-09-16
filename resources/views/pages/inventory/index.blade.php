@extends('layouts.app')

@section('title', 'Inventory')

@section('content')
    <h1>Inventory List</h1>

    <div class="mb-3">
        <a href="{{ route('inventory.create') }}" class="btn btn-primary">Add New Item</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ number_format($item->price, 2) }}</td>
                        <td>
                            <span class="badge {{ $item->quantity > 0 ? 'bg-success' : 'bg-danger' }}">
                                {{ $item->quantity > 0 ? 'In Stock' : 'Out of Stock' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('inventory.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $items->links() }}
@endsection