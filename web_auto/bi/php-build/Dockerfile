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

# install git zip for composer use
RUN apt-get install -y git zip
RUN apt-get install -y rsync

# install smarty 2.6.28
ADD Smarty-2.6.28.tar.gz /

RUN sed -i 's/    function Smarty_Compiler()/    function __construct()/g' /Smarty-2.6.28/libs/Smarty_Compiler.class.php
RUN sed -i 's/    function Smarty()/    function __construct()/g' /Smarty-2.6.28/libs/Smarty.class.php

RUN mv /Smarty-2.6.28/ /usr/local/lib/php/smarty
RUN cd  /usr/local/lib/php/ && ln -s /usr/local/lib/php/smarty smarty2

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

CMD /entrypoint.sh