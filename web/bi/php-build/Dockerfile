FROM php:8.0-fpm-buster

RUN apt-get update -y
RUN apt-get install -y libpng-dev
RUN apt-get install -y zlib1g-dev 
RUN apt-get install -y libgd3 libgd-dev


RUN pear install Log

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql

# install php zip
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-configure gd
RUN docker-php-ext-install -j$(nproc) gd

# install pgsql
RUN apt-get install -y libpq-dev     && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql     && docker-php-ext-install pdo pdo_pgsql pgsql

