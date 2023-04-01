# Import image
FROM php:8.1.0-fpm

# Zip
RUN apt-get update && apt-get install -y libzip-dev zip && docker-php-ext-configure zip && docker-php-ext-install zip

# Git
RUN apt-get update && apt-get install -y git

# Curl
RUN apt-get update && apt-get install -y libcurl3-dev curl && docker-php-ext-install curl

# Install Xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# Composer installation
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set work directory
WORKDIR /var/www
