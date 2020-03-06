FROM ubuntu:18.04
MAINTAINER artem

# Prepare
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y curl wget nano

# Set timezone
ENV TZ=Europe/Helsinki
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install Apache
RUN apt-get install -y apache2 apache2-utils libapache2-mod-fcgid
RUN mkdir /www
RUN chown -R www-data:www-data /www 

# Put apache config
COPY apache2.conf /etc/apache2/apache2.conf

# Enable mods
RUN a2enmod rewrite
RUN a2enmod actions fcgid alias proxy_fcgi

EXPOSE 80

CMD apachectl -D FOREGROUND