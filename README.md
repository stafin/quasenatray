# API BACK-END QUASENATRAY

- Inicia os containers para testes de requisição http://localhost:8989 :
- COLLECTION POSTMAN para testar esta na pasta _POSTMAN:

```bash
docker-compose up -d
```

- Acessar o container :

```bash
docker-compose exec app bash
```

- Gerar o .env e alterar as configs necessárias :

```bash
cp .env.example .env
```
```bash
APP_NAME=QuaseNaTray
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=dbquasenatray
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=database
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

- Instalar as dependências do Laravel :

```bash
composer install
```

- Gerar a key do laravel :

```bash
php artisan key:generate
```

- Rodar as Migrations com o Seeder iniciai :

```bash
php artisan migrate --seed
```

- Finalizar os containers:

```bash
docker-compose down
```

