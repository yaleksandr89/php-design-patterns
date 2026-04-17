SHELL := bash

.PHONY: docker-init docker-build docker-up docker-down docker-logs docker-shell composer-install composer-dump-autoload composer-init

DOCKER_ENV_FILE := .env
DOCKER_ENV_EXAMPLE := .env.example
DOCKER_COMPOSE := docker compose --env-file $(DOCKER_ENV_FILE)

docker-init:
	if [ ! -f "$(DOCKER_ENV_FILE)" ]; then cp $(DOCKER_ENV_EXAMPLE) $(DOCKER_ENV_FILE); fi

docker-build: docker-init
	$(DOCKER_COMPOSE) build

docker-up: docker-init
	$(DOCKER_COMPOSE) up -d --build

docker-down: docker-init
	$(DOCKER_COMPOSE) down --remove-orphans

docker-logs: docker-init
	$(DOCKER_COMPOSE) logs -f

docker-shell: docker-init
	$(DOCKER_COMPOSE) exec php bash

composer-install: docker-init
	$(DOCKER_COMPOSE) exec php composer install

composer-dump-autoload: docker-init
	$(DOCKER_COMPOSE) exec php composer dump-autoload -o

composer-init: composer-install composer-dump-autoload

lint:
	composer exec phpcs -- --standard=phpcs.xml config/ public/ src/

lint-fix:
	composer exec phpcbf -- --standard=phpcs.xml config/ public/ src/