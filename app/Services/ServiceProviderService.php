<?php

namespace App\Services;

use App\Models\ServiceProvider;

class ServiceProviderService
{
    public function indexWithCategories(array $data): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return ServiceProvider::with('category')
            ->when(!empty($data['category']), function ($query) use ($data) {
                return $query->where('category_id', $data['category']);
            })
            ->paginate(10);
    }
}
