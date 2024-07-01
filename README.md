<p align="center"><img src="https://telegra.ph/file/41925855b5ce251442218.png" alt="Screen app"></p>

## About the project

The project serves to communicate weather information to users:

- Stay informed through the platform.
- To be informed through the Telegram messenger.

According to the above types, users can get information according to their wishes.

## Project deployment

To deploy a project with Docker containers on an Ubuntu server, you'll follow several steps to set up Docker, manage your Docker environment, and deploy your application. Below is a simplified guide to get you started. Adjustments may be necessary based on your specific application requirements and setup.

### Prerequisites
- <b>Ubuntu Server:</b>  Ensure you have Ubuntu Server installed and accessible via SSH
- <b>Docker Engine:</b> [Install Docker on your Ubuntu server.](https://docs.docker.com/engine/install/ubuntu/)
- <b>Docker Compose </b><i>(Optional but recommended)</i>: Install Docker Compose for managing multi-container Docker applications.


## Steps to Deploy Project with Docker
- <b>Install Docker on Ubuntu Server</b>

<i>Update package index</i>
```
sudo apt-get update
```
<i>Install dependencies to allow apt to use a repository over HTTPS</i>
```
sudo apt-get install -y \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg \
    lsb-release
```
<i>Add Docker’s official GPG key</i>
```
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
```
<i>Set up the stable repository</i>
```
echo \
  "deb [arch=amd64 signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
```
<i>Update the apt package index again</i>
```
sudo apt-get update
```
<i>Install Docker Engine</i>
```
sudo apt-get install -y docker-ce docker-ce-cli containerd.io
```
<i>Verify Docker installation</i>
```
sudo docker --version
```
- <b>Install Docker Compose (Optional)</b>
<i>Download the current stable release of Docker Compose</i>
```
sudo curl -L "https://github.com/docker/compose/releases/download/{VERSION}/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
```
<i>Apply executable permissions to the binary</i>
```
sudo chmod +x /usr/local/bin/docker-compose
```
<i>Verify installation</i>
```
docker-compose --version
```
Replace ```{VERSION}``` with the latest release version from the [Docker Compose GitHub Releases page.](https://github.com/docker/compose/releases)
- <b>Build and Run Docker Containers</b>
```
docker compose up -d
```
- <b>Install and build app</b>
```
docker exec -u $UID:$GID -ti weather /bin/bash
```
```
composer install
```
```
npm i
```
```
npm run build
```
```
cp env.example .env
```
```
php artisan key:generate
```
```
php artisan migrate --seed
```
```
php artisan optimize
```
For sign in test user
<p align="center"><img src="https://telegra.ph/file/2ae5c87fad3ae8abaf728.png" alt="Screen app"></p>

- <b>Login:</b> 
```
test@example.com
```
- <b>Password:</b> 
```
74108520963.
```
<p align="center"><img src="https://telegra.ph/file/0051920b4495ff7f66c0f.png" alt="Screen app"></p>
