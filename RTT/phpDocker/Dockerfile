FROM php:8.1
MAINTAINER Molnár Péter
RUN docker-php-ext-install mysqli
WORKDIR /
ADD src/index.php .
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]