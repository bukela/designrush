@extends('layouts.app')

@section('title', 'Service Providers - My App')
@section('page-title', 'Service Providers Directory')

@push('styles')
    <style>
        .providers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .provider-card {
            background: white;
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            border: 1px solid #e5e7eb;
        }

        .provider-card:hover {
            transform: translateY(-2px);
        }

        .provider-card img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
        }

        .provider-card h3 {
            margin: 0 0 0.5rem 0;
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
        }

        .provider-card p {
            color: #6b7280;
            margin: 0 0 1rem 0;
            line-height: 1.5;
        }

        .provider-category {
            display: inline-block;
            background: #3b82f6;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .no-providers {
            text-align: center;
            padding: 3rem;
            color: #6b7280;
            grid-column: 1 / -1;
        }

                .pagination {
            font-size: 0.95rem;
        }
        .pagination .page-link {
            padding: 0.25rem 0.75rem;
            font-size: 0.95rem;
        }
        .pagination .page-item.active .page-link {
            background-color: #3b82f6;
            border-color: #3b82f6;
            color: #fff;
        }
        .pagination .page-link svg {
            width: 1em;
            height: 1em;
        }
    </style>
@endpush

@section('content')
    <div class="providers-grid">
        @forelse($serviceProviders as $provider)
            <div class="provider-card">
                <img src="{{ $provider->logo_path }}"
                     alt="{{ $provider->name }}"
                     loading="lazy"
                     width="200" height="200">
                <h3>{{ $provider->name }}</h3>
                <p>{{ $provider->description }}</p>
                <span class="provider-category">{{ $provider->category->name }}</span>
            </div>
        @empty
            <div class="no-providers">
                <h3>No service providers found</h3>
                <p>No providers are available at the moment.</p>
            </div>
        @endforelse
        {{  $serviceProviders->links()  }}
    </div>
@endsection
