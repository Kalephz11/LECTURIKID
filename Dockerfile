FROM php:8.2-apache

# Habilita mod_rewrite (por si usas rutas amigables)
RUN a2enmod rewrite

# Copia tu proyecto al servidor Apache dentro del contenedor
COPY . /var/www/html/

# Permisos opcionales
RUN chown -R www-data:www-data /var/www/html

# Expone el puerto 80 (el que usa Apache)
EXPOSE 80

