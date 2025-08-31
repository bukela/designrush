@extends('layouts.app')

@section('title', $provider->name . ' - Service Provider')
@section('page-title', $provider->name)

@section('content')
    <div class="provider-card" style="max-width: 500px; padding: 2rem;">
        <img src="{{ asset($provider->logo_path) }}" alt="logo" class="provider-logo" style="width:260px;height:260px;object-fit:cover;border-radius:8px;display:block;margin:0 auto 1.5rem auto;">
        <h2 class="provider-name" style="text-align:center;">{{ $provider->name }}</h2>
        <p class="provider-description" style="text-align:center;">{{ $provider->description }}</p>
        <div style="text-align:center;">
            <span class="provider-category">{{ $provider->category->name }}</span>
        </div>
        <div style="text-align:center;margin-top:2rem;">
            <a href="{{ route('service_providers.index') }}" class="view-profile-btn">Back to Directory</a>
        </div>
    </div>
@endsection
