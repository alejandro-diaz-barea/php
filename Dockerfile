# Usar la imagen oficial de PHP 7.4 con Apache
FROM php:7.4-apache

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html

# Exponer el puerto 80
EXPOSE 80
