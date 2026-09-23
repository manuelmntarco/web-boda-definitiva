# PHP 8.4 con Apache incluido
FROM php:8.4-apache

# La imagen oficial no trae mysqli: la compilamos e instalamos
RUN docker-php-ext-install mysqli
