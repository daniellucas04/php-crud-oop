FROM alpine/git

RUN git clone https://github.com/daniellucas04/php-crud-oop.git && docker-compose up