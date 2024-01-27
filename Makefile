setup:
	@make build
	@make up
	@make composer-update
	@make generate-key
	@make permission
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec teste-multipedidos bash -c "composer update"
data:
	docker exec teste-multipedidos bash -c "php artisan migrate"
	docker exec teste-multipedidos bash -c "php artisan db:seed"
permission:
	docker exec teste-multipedidos bash -c "chmod -R 777 storage/ && chmod -R guo+w storage && chmod -R gu+w storage"
generate-key:
	docker exec teste-multipedidos bash -c "php artisan key:generate"