# Service Providers Directory

A Laravel application for managing and displaying service providers with category filtering.

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

### Implemented Features

- **MVC Pattern**: Follows Laravel's MVC architecture for clean separation of concerns
- **Service Layer**: Business logic is encapsulated in service classes for better maintainability
- **Eager Loading**: Relationships are eager loaded to prevent N+1 query problems
- **Pagination**: Large datasets are paginated to reduce memory usage
- **Asset Optimization**: JavaScript and CSS are minified and versioned

### Future Enhancements

- **Implement CRUD**: Add CRUD operations for Service Providers and Categories
- **Implement Caching**: Add Redis for faster response times (e.g. for Categories)
- **Rate Limiting**: Maybe implement rate limiting for public endpoints
- **Static Analysis**: Integrate PHPStan or Psalm
- **CI/CD Pipeline**: Set up GitHub Actions for automated testing and deployment
