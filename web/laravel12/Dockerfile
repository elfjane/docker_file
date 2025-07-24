FROM php:8.3.23-fpm-bookworm

# 減少互動提示
ARG DEBIAN_FRONTEND=noninteractive

# 安裝常用套件與 PHP 擴充
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        curl \
        git \
        zip \
        unzip \
        apt-utils \
        libpq-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libonig-dev \
        libzip-dev \
        python3 \
        python3-pip && \
    ln -s /usr/bin/python3 /usr/bin/python && \
    rm -rf /var/lib/apt/lists/*

# 安裝 PHP 擴充模組
RUN docker-php-ext-install \
        mysqli \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        gd \
        pgsql \
        pdo_pgsql

# GD 圖片處理（可選）
RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg

# 安裝 Composer
COPY ./composer /usr/local/bin/composer

RUN composer global require laravel/installer && \
    echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> /root/.bashrc

# 安裝 nvm & Node.js
ENV BASH_ENV=/root/.bash_env
SHELL ["/bin/bash", "-o", "pipefail", "-c"]
RUN touch "$BASH_ENV" && \
    echo '. "$BASH_ENV"' >> ~/.bashrc && \
    curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.3/install.sh | PROFILE="$BASH_ENV" bash && \
    source "$BASH_ENV" && \
    nvm install --lts && \
    nvm install 12.22.12 && \
    nvm install 8.17.0 && \
    nvm alias default node

WORKDIR /var/www/html

# 可選：將 Laravel 專案 copy 進容器
# COPY . /var/www/html

# 可選：設定權限
# RUN chmod -R 775 storage bootstrap/cache
