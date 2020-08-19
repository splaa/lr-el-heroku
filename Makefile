lr-echo-serv-start:
	laravel-echo-server start
lr-artisan-queue-work:
	php artisan queue:work
lr-echo-serv-stop:
	laravel-echo-server stop
lr-serve-run: serv-artisan

test:
	phpunit
watch:
	npm watch
migrate-refresh:
	 php artisan migrate:refresh --seeder
seeder-all:
	 php artisan db:seed
seeder-post:
	 php artisan db:seed --class=PostTableSeeder

# Heroku
heroku-set-key:
	heroku config:set APP_KEY=base64:BNEcXgGiDZu6jtYTD5jjAKAolkWI0bEHEf9dRtr+KeY=
heroku-migrate:
	heroku run php artisan migrate --app=lr-el
heroku-seeder:
	heroku run php artisan db:seed --class=PostTableSeeder --app=lr-el

heroku-greate-database-sqlite:
	heroku run php touch /app/database/heroku-database.sqlite


heroku-echo:
		heroku run node server.js;
heroku--queue:
		heroku run php artisan queue:work

echo-serv:
		node server.js;
queue-artisan:
		php artisan queue:work
serv-artisan:
		php artisan serv

