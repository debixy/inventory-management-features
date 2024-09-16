@extends('layouts.app')

@section('title', 'Add New Item')

@section('content')
    <h1>Add New Inventory Item</h1>

    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" id="quantity" name="quantity" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" id="price" name="price" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Add Item</button>
    </form>
@endsection