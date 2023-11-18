build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up
serve:
	php artisan serve
migrate:
	php artisan migrate
composer-update:
	composer update
d-composer-update:
	docker exec laravel-doc-app bash -c "composer update"
d-migrate:
	docker exec laravel-doc-app bash -c "php artisan migrate"
d-bash:
	docker exec -it laravel-doc-app bash