### Requirements
- php 7.4 (while we're not using docker)

### Setting up 

This will get the app running with sqlite on your machine.

From here, we will work together to have it using docker containers.


- `cp .env.example .env`   
- `touch database/database.sqlite`
- `composer i`
- `php artisan key:generate`
- `php artisan migrate`
- `npm i && npm run dev`
- `php artisan serve`
