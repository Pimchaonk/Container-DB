# Use the official PHP base image with Apache
FROM php:7.4-apache

# Install MySQL extensions for PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your PHP, HTML, and JavaScript files to the container
COPY . .

# Set working directory inside the container
WORKDIR /var/www/html


# Expose the port 80 to allow HTTP traffic
EXPOSE 80

# Start Apache server with PHP to serve your application
CMD ["apache2-foreground"]
