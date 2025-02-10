FROM php:8.4-apache

ENV APACHE_DOCUMENT_ROOT /var/www/public

RUN apt-get update
RUN apt-get install -y vim git zip unzip

COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/

