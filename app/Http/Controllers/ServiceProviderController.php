<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ServiceProvider;
use App\Services\ServiceProviderService;
use App\Http\Requests\ServiceProviderIndexRequest;

class ServiceProviderController extends Controller
{
    protected ServiceProviderService $service;

    public function __construct(ServiceProviderService $service)
    {
        $this->service = $service;
    }

    public function index(ServiceProviderIndexRequest $request)
    {
        $categories = Category::select('id', 'name')->get();
        $serviceProviders = $this->service->indexWithCategories($request->validated());
        return view(
            'service_providers.index',
             compact('serviceProviders', 'categories')
        );
    }

    public function show(int $id)
    {
        $provider = ServiceProvider::with('category')->findOrFail($id);
        return view('service_providers.show', compact('provider'));
    }
}
