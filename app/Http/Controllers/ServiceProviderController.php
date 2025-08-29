<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index()
    {
        $serviceProviders = ServiceProvider::with('category')->paginate(10);
        return view('service_providers.index', ['serviceProviders' => $serviceProviders]);
    }
}
