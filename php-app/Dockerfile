FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Copy your PHP application code to the document root
COPY . /var/www/html
