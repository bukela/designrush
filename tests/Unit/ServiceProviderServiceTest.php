<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\ServiceProvider;
use App\Services\ServiceProviderService;
use Tests\TestCase;

class ServiceProviderServiceTest extends TestCase
{
    protected $category1;
    protected $providersCategory1 = [];

    protected function setUp(): void
    {
        parent::setUp();
        $this->category1 = Category::create(['name' => 'Test Category 1', 'slug' => 'test-category-1']);
        $this->providersCategory1 = ServiceProvider::factory()
            ->count(3)
            ->create(['category_id' => $this->category1->id]);
    }

    protected function tearDown(): void
    {
        ServiceProvider::where('category_id', $this->category1->id)->delete();
        $this->category1->delete();
        parent::tearDown();
    }

    public function testIndexWithCategoryReturnsFilteredResults(): void
    {
        $service = new ServiceProviderService();
        $result = $service->indexWithCategory(['category' => $this->category1->id]);

        $this->assertEquals(3, count($result->items()));
        foreach ($result as $provider) {
            $this->assertEquals($this->category1->id, $provider->category_id);
        }
    }

    public function testIndexWithoutCategoryReturnsAllResults(): void
    {
        $service = new ServiceProviderService();
        $result = $service->indexWithCategory([]);

        $this->assertEquals(10, count($result->items()));
    }
}
