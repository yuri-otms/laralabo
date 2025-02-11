FROM php:8.4-apache

RUN apt-get update
RUN apt-get install -y vim git zip unzip
RUN docker-php-ext-install pdo_mysql

COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

COPY ./000-default.conf /etc/apache2/sites-available

RUN a2enmod rewrite

WORKDIR /var/www/

