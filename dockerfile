# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/VaguadaInterfaces

# Copy the website files into the container
COPY HTML /var/www/VaguadaInterfaces/HTML
COPY js /var/www/VaguadaInterfaces/Js
COPY CSS /var/www/VaguadaInterfaces/CSS
COPY img /var/www/VaguadaInterfaces/img

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
