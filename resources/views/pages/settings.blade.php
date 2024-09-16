@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <h1>Settings</h1>

    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="email" class="form-label">Notification Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $settings->email }}" required>
        </div>

        <div class="mb-3">
            <label for="threshold" class="form-label">Low Stock Threshold</label>
            <input type="number" id="threshold" name="threshold" class="form-control" value="{{ $settings->threshold }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
@endsection