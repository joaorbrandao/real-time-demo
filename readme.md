# Real Time Demo
This is a basic Laravel project to show how you can setup a real time system.

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
subscribe HelloWorldChannel
```

Now Open a web browser and access: *http://localhost:8000/fire/hello-world*

You will notice the fired event on the **Unix Terminal 2**.