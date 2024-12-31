FROM php:8.1.16-fpm-buster

ARG DEBIAN_FRONTEND=noninteractive

# install yaml
RUN apt-get update
RUN apt-get install libyaml-dev -y
RUN pecl install yaml
RUN docker-php-ext-enable yaml

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
