# php-laravel-10
Repository for initial studies with the Laravel framework.

## Index

- [Documentation - Laravel10](https://laravel.com/docs/10.x)
- [Technologies](#technologies)

## Technologies

- [Docker](https://www.docker.com/)
- [Laravel v10](https://laravel.com/)
- [PHP v8.1](https://www.php.net/)

## Getting started

1. Clone this repository
```bash
git clone git@github.com:padupe/php-laravel-10.git
```

2. Access the directory:
```bash
cd php-laravel-10 
```

3. Make a `.env` file:
```bash
cp .env.example .env 
```

4. Up Docker containers:
```bash
docker-compose up -d
```

5. Access container App:
```bash
docker-compose exec app bash 
```

6. Install dependencies project:
```bash
composer install
```

7. Generate Laravel Project key:
```bash
php artisan key:generate 
```

8. Run project at http://localhost:8989
