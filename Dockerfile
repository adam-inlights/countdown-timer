FROM php:8.2-apache
RUN apt-get update &&     apt-get install -y libmagickwand-dev --no-install-recommends &&     pecl install imagick &&     docker-php-ext-enable imagick &&     rm -rf /var/lib/apt/lists/*
COPY . /var/www/html/
EXPOSE 80
