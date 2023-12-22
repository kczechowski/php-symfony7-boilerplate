DOCKER-COMPOSE = docker-compose --env-file ./.sysadmin/docker/.docker.env --file docker-compose.yaml

up:
	@${DOCKER-COMPOSE} up --detach --build --remove-orphans

down:
	@${DOCKER-COMPOSE} down --volumes --remove-orphans

start:
	@${DOCKER-COMPOSE} start

stop:
	@${DOCKER-COMPOSE} stop

shell:
	@${DOCKER-COMPOSE} exec php-fpm fish

lint:
	@${DOCKER-COMPOSE} exec php-fpm composer run lint