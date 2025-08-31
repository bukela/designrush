# Service Providers Directory

A Laravel application for managing and displaying service providers with category filtering.

## Features

- List all service providers with pagination
- Filter service providers by category
- View detailed information about each service provider
- Responsive design for all devices

## API Endpoints

### List Service Providers
- **URL**: `/service-providers`
- **Method**: `GET`
- **Query Parameters**:
  - `category` (optional, integer) - Filter by category ID
  - `page` (optional, integer) - Page number for pagination

### View Service Provider
- **URL**: `/service-providers/{id}`
- **Method**: `GET`
- **URL Parameters**:
  - `id` - (integer) The ID of the service provider

## Setup Instructions

1. Clone the repository
2. Copy `.env.example` to `.env` and configure your database settings
3. Run the setup command:

```bash
composer install
php artisan migrate --seed
php artisan storage:link
```

This will:

- Install PHP dependencies
- Generate application key
- Run database migrations
- Seed the database with test data
- Create a storage symlink

### Running Tests

Run all tests:

```bash
php artisan test
```

Run a specific test file:

```bash
php artisan test tests/Feature/ServiceProviderTest.php
```
