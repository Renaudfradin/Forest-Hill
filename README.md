## 🛠 Installation & Set Up

1. Install dependencies

```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
2. Start the development server

start docker
```sh
./vendor/bin/sail up
```

execute migration and seeder
```sh
./vendor/bin/sail artisan migrate:fresh --seed
```

3. Base Url

http://127.0.0.1:8001/

Admin dashbord : http://127.0.0.1:8001/admin
