# Use the official PHP image with Apache
FROM php:8.1-apache

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Copy the app files to the container
COPY . /var/www/html/

