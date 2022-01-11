FROM php:7.1-apache-buster

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# install mysql pdo extension 
RUN docker-php-ext-install pdo_mysql

COPY simple_php_auth /var/www/html

