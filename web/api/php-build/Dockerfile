FROM php:8.1.0-fpm-buster

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y curl
RUN apt-get install -y --no-install-recommends apt-utils

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql

# install pgsql
RUN apt-get install -y libpq-dev && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && docker-php-ext-install pdo pdo_pgsql pgsql

#RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev 
#RUN docker-php-ext-configure gd --with-freetype --with-jpeg
#RUN docker-php-ext-install -j$(nproc) gd

#RUN apt-get install -y libonig-dev
#RUN docker-php-ext-install mbstring

#RUN apt-get install -y libzip-dev
#RUN docker-php-ext-install zip

#RUN chmod 777 /var/www/html/bootstrap/cache
#RUN chmod 777 /var/www/html/storage/logs/laravel.log

#RUN cd /var/www/html && php artisan migrate
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# install git zip for composer use
RUN apt-get install -y git zip