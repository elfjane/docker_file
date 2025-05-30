FROM php:8.1.16-fpm-buster

ARG DEBIAN_FRONTEND=noninteractive

ENV TZ=Etc/UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update

# install ssh
RUN apt-get install -y openssh-server
RUN useradd -ms /bin/bash elfjane
RUN mkdir /var/run/sshd
RUN echo 'root:7LJ4PwOZgMX9LKeY' | chpasswd
RUN echo 'elfjane:1234' | chpasswd
RUN sed -i 's/PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config
RUN echo 'HostKeyAlgorithms +ssh-rsa' >> /etc/ssh/sshd_config

ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd


# install tools
RUN apt-get install -y zip 
RUN apt-get install -y net-tools
RUN apt-get install -y iputils-ping
RUN apt-get install -y curl
RUN apt-get install -y --no-install-recommends apt-utils

# install git zip for composer use
RUN apt-get install -y git zip
RUN apt-get install -y rsync
RUN apt-get install -y sudo
RUN sudo usermod -aG sudo elfjane

# install ext
#RUN docker-php-ext-configure intl
RUN docker-php-ext-install mysqli pdo pdo_mysql

#RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev 
#RUN docker-php-ext-configure gd --with-freetype --with-jpeg
#RUN docker-php-ext-install -j$(nproc) gd

RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip

RUN apt-get install -y libicu-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# 增加 debug
RUN pecl install xdebug-3.1.4
RUN docker-php-ext-enable xdebug
#COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
# Configure Xdebug
RUN echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install php-mbstring
RUN apt-get install -y libonig-dev
RUN docker-php-ext-install mbstring

# copy file 11
COPY entrypoint.sh /entrypoint.sh
RUN chmod 777 /entrypoint.sh

WORKDIR /var/www/payment

CMD ["/entrypoint.sh"]
