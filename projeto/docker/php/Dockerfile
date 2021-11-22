FROM php:8.0.11-fpm

RUN apt-get update && apt-get install -y libzip-dev --no-install-recommends

# Habilitando a extensão do MySQL
RUN docker-php-ext-install pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer