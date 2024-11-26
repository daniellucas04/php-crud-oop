FROM php:7.4-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY app/ /var/www/html

EXPOSE 80