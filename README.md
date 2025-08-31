# Service Providers Directory

A Laravel application for managing and displaying service providers with category filtering.

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
