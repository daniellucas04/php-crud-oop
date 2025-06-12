FROM php:7.4

WORKDIR /

RUN docker-php-ext-install pdo pdo_mysql

COPY . /

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "app"]