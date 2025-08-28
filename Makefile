# 2 únicos comandos necessários:
setup:
	@make build
	@make create-network
	@make up 
	@make composer-update
	@make install-dependencies
	@make data

app-run:
	docker compose exec app php artisan serve --host 0.0.0.0 --port 8000

# ====================================================================================================================

build:
	docker compose build --no-cache --force-rm

up:
	docker compose up -d

create-network:
	docker network create oaktechtest-net


composer-update:
	docker exec app composer update

install-dependencies:
	docker exec app composer install

data:
	docker compose exec db mysql -u root -p'password' -e "DROP DATABASE IF EXISTS oaktechtest;"
	docker compose exec db mysql -u root -p'password' -e "CREATE DATABASE oaktechtest;"
	docker exec app php artisan migrate
	docker exec app php artisan db:seed

