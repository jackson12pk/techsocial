# Use uma imagem base do PHP com Apache
FROM php:8.2-apache

# Instale as extensões necessárias do PHP
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql

# Habilite o mod_rewrite do Apache
RUN a2enmod rewrite

# Copie o código do seu projeto para o diretório root do Apache
COPY . /var/www/html/

# Defina permissões adequadas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
