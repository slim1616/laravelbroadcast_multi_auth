## Laravel broadcast multi gurads auth (web + api)

composer install<br>
npm install<br>
<h2>Create an empty database for the application</h2>
<h2>Create your .env file</h2>
change : BROADCAST_DRIVER=redis <br>
php artisan key:generate<br>
php artisan migrate<br>
php artisan passport:install<br>

php artisan passport:client –password <br>

<h2>Lunch laravel-secho-server</h2>
<h3>Change Ip adresse in laravel-echo-server.json</h3>

laravel-echo-server start<br>

<h2>Lunch server with your IP adress :</h2>
npm run watch<br>

php artisan serve --host=your-ip --port=8000<br>
