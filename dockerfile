# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the website files into the container
COPY HTML /var/www/html/HTML
COPY Js /var/www/html/Js
COPY CSS /var/www/html/CSS
COPY img /var/www/html/img

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
