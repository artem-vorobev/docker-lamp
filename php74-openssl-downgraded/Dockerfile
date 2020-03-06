FROM php:7.4-fpm
RUN docker-php-ext-install pdo_mysql
RUN apt-get -qq update && apt-get -qq install libxml++2.6-dev > /dev/null
RUN docker-php-ext-install soap
RUN pecl install xdebug && docker-php-ext-enable xdebug
ADD php.ini /usr/local/etc/php/conf.d
ADD openssl.cnf /usr/lib/ssl/openssl.cnf
ADD fakesendmail.php /