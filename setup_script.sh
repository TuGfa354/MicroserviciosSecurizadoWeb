#!/bin/bash

# Update package lists
sudo apt update

# Install necessary packages
sudo apt-get install -y ca-certificates curl

# Create directory for keyrings
sudo install -m 0755 -d /etc/apt/keyrings

# Download Docker GPG key
sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg -o /etc/apt/keyrings/docker.asc

# Set permissions for Docker GPG key
sudo chmod a+r /etc/apt/keyrings/docker.asc

# Add Docker repository to sources list
echo "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/ubuntu $(. /etc/os-release && echo "$VERSION_CODENAME") stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

# Update package lists again to fetch Docker packages
sudo apt-get update


# Navigate to the cloned directory
cd MicroserviciosSecurizadoWeb/

# Build Docker image
sudo docker build -t my-php-static-site .

# Run Docker container
sudo docker run -d -p 8080:80 my-php-static-site