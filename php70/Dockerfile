FROM php:7.0-fpm
RUN docker-php-ext-install mysqli pdo_mysql

# mcrypt
RUN apt-get update && apt-get install -y libmcrypt-dev
RUN docker-php-ext-install mcrypt

# xdebug
RUN pecl install xdebug-2.5.0 && docker-php-ext-enable xdebug

# memcached
RUN apt-get update \
  && apt-get install -y libmemcached-dev zlib1g-dev \
  && pecl install memcached-3.0.3 \
  && docker-php-ext-enable memcached opcache

ADD php.ini /usr/local/etc/php/conf.d
ADD fakesendmail.php /