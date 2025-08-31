@extends('layouts.app')

@section('title', 'Service Providers - My App')
@section('page-title', 'Service Providers Directory')

@section('content')
    <form method="GET" action="{{ route('service_providers.index') }}" style="margin-bottom: 2rem;">
        <label for="category" style="font-weight: 500; margin-right: 0.5rem;">Filter by Category:</label>
        <select name="category" id="category" onchange="this.form.submit()"
                style="padding: 0.25rem 0.75rem; border-radius: 0.375rem; border: 1px solid #e5e7eb;">
            <option value="">All Categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>
    <div class="providers-grid">
        @forelse($serviceProviders as $provider)
            <div class="provider-card">
                <img src="{{ asset($provider->logo_path) }}"
                     alt="logo"
                     loading="lazy"
                     width="200" height="200">
                <h3>{{ $provider->name }}</h3>
                <p>{{ $provider->description }}</p>
                <span class="provider-category">{{ $provider->category->name }}</span>
                <a href="{{ route('service_providers.show', $provider->id) }}" class="view-profile-btn">View Profile</a>
            </div>
        @empty
            <div class="no-providers">
                <h3>No service providers found</h3>
            </div>
        @endforelse
    </div>
    <div class="pagination">
        {{ $serviceProviders->appends(request()->except('page'))->links() }}
    </div>
@endsection
