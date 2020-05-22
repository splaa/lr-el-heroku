serve-run:
	php artisan serv
test:
	phpunit
watch:
	yarn watch

heroku-set-key:
	heroku config:set APP_KEY=base64:BNEcXgGiDZu6jtYTD5jjAKAolkWI0bEHEf9dRtr+KeY=
