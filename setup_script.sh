#!/bin/bash

# Update package lists
sudo apt-get update

# Install necessary packages
sudo apt-get install -y ca-certificates curl

# Create directory for keyrings
sudo install -m 0755 -d /etc/apt/keyrings

# Download Docker GPG key
sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg -o /etc/apt/keyrings/docker.asc

# Set permissions for Docker GPG key
sudo chmod a+r /etc/apt/keyrings/docker.asc

# Add Docker's official GPG key
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg

# Add Docker repository to Apt sources
echo "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu \
$(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

# Update package lists again to fetch Docker packages
sudo apt-get update

# Build Docker image
sudo docker build -t my-php-static-site .

# Run Docker container
sudo docker run -d -p 8080:80 my-php-static-site
