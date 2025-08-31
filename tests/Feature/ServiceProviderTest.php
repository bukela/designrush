<?php

namespace Tests\Feature;

use App\Models\ServiceProvider;
use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    public function itCanDisplayAllServiceProviders(): void
    {
        $response = $this->get(route('service_providers.index'));

        $response->assertStatus(200)
            ->assertViewIs('service_providers.index')
            ->assertViewHas('serviceProviders')
            ->assertDontSee('Mobile Provider');
    }

    public function itCanDisplayASingleServiceProvider(): void
    {
        $provider = ServiceProvider::first();

        $response = $this->get(route('service_providers.show', $provider->id));

        $response->assertStatus(200)
            ->assertViewIs('service_providers.show')
            ->assertViewHas('provider')
            ->assertSee($provider->name)
            ->assertSee($provider->description)
            ->assertSee($provider->category->name);
    }

    public function itReturns404ForNonexistentServiceProvider(): void
    {
        $response = $this->get(route('service_providers.show', 9999));

        $response->assertStatus(404);
    }
}
