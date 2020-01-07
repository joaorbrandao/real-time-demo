
<h1 align="center">
    <img src="support_apps/samples/real_time_demo_banner.png"/>
</h1>
This is a basic Laravel project to show how you can setup a real time system.

## Setup
```bash
composer install
npm install
npm run dev
```

## Test
```bash
# Unix Terminal 1
redis-server

# CMD 1
php artisan serve

# CMD 2
php artisan queue:work

# CMD 3
npm run laravel-echo-server

# Unix Terminal 2
redis-cli
psubscribe *
```

Now Open a web browser and access: *http://localhost:8000/fire/hello-world*

You will notice the fired event on the **Unix Terminal 2**.