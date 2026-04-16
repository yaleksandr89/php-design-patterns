FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && git config --global --add safe.directory /app \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY docker/php/php.ini /usr/local/etc/php/conf.d/99-php.ini
COPY docker/php/xdebug.ini /usr/local/etc/php/conf.d/99-xdebug.ini