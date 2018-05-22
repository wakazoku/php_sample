FROM php:7.1-apache
ADD php.ini /usr/local/etc/php/

RUN apt-get update
RUN docker-php-ext-install pdo_mysql
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug