# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/

# Copy the website files into the container
COPY HTML /var/www/HTML
COPY Js /var/www/Js
COPY CSS /var/www/CSS
COPY img /var/www/img

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
