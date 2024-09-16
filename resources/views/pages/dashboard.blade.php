@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            @include('components.dashboard-stats', ['title' => 'Total Items', 'count' => $totalItems])
        </div>
        <div class="col-lg-4">
            @include('components.dashboard-stats', ['title' => 'Low Stock', 'count' => $lowStockItems])
        </div>
        <div class="col-lg-4">
            @include('components.dashboard-stats', ['title' => 'Out of Stock', 'count' => $outOfStockItems])
        </div>
    </div>

    <div class="mt-4">
        <h3>Recent Activities</h3>
        @include('components.recent-activity', ['activities' => $recentActivities])
    </div>
@endsection
