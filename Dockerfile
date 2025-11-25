FROM php:8.2-apache

# Activar mod_rewrite
RUN a2enmod rewrite

# Copiar los archivos del proyecto
COPY . /var/www/html/

# Dar permisos (opcional)
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80
