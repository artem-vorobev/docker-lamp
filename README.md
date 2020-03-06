# Docker LAMP environment for local web development

For running this you need to have Docker installed. You can download it from [here](https://www.docker.com/products/docker-desktop).

For checking if Docker is running try `docker -v` in your terminal.

## Launching your Docker environment

Clone this repo in any place of your filesystem.

Open and edit `.env` file. There are only two variables - your `WEBDEV_FOLDER` where all virtual hosts will be and `MYSQL_ROOT_PARRWORD` which is your future MySQL root password (you can leave as it defined).

Open `virtual-hosts.conf.example` and read it. It describes how to add virtual hosts. If you are familiar with Apache's config files maybe you will not find anything new for you.

Add virtual hosts into file with name `virtual-hosts.conf` and put if into your `WEBDEV_FOLDER`.

Open your terminal in root of the repo and run `docker-compose up --build`. First time it will downloads all images, so maybe you need to wait couple of minutes. After all terminal will log all incoming requests for containers. You can just close terminal - it will not stop work of container.

Check if local hosts is available in your browser. If not, read `virtual-hosts.conf.example` more carefully.

## Restarting

Each time when you edit `virtual-hosts.conf` you need to restart your environment.

Run `docker-compose restart` inside repo's root folder.

## Stopping

Run `docker-compose stop` inside repo's root folder.

## Working with databases

PhpMyAdmin is installed as container and available at `localhost:8080`.

## Conflicts

If you have any LAMP environment already running please stop it before launching this.
