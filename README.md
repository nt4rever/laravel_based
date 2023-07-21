## Build
- Create .env in folder frontend from .env.example
- Create .env in folder backend from .env.example
```
    docker-compose up --build -d
    docker-compose run --rm app sh /var/www/setup.sh
```

- Generate worklog 
    - php artisan create_worklog -d yyyy/mm/dd