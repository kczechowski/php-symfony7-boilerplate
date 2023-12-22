FROM php:8.3-fpm-alpine AS base

COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer
COPY --from=mlocati/php-extension-installer:latest /usr/bin/install-php-extensions /usr/bin/

RUN apk add --update --no-cache fish icu-data-full shadow git bash

RUN install-php-extensions intl opcache pdo_mysql zip redis

ARG UID=10000
ARG GID=10000

RUN usermod -u $UID www-data
RUN groupmod -g $GID www-data

FROM base as development

COPY ./.sysadmin/docker/php-fpm/php-overrides.ini /tmp/php-overrides.ini
RUN cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
RUN cat /tmp/php-overrides.ini > $PHP_INI_DIR/conf.d/php-overrides.ini

USER www-data