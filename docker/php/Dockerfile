FROM php:8.1-fpm-alpine

RUN apk add --no-cache \
    git \
    unzip \
    shadow;

RUN set -xe; \
    usermod -u 1000  www-data;\
    groupmod -g 1000 www-data;

RUN set -xe;\
    docker-php-ext-install pdo;\
    docker-php-ext-install pdo_mysql;

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
