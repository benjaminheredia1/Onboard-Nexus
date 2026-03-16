# Usamos la versión de PHP 8.4 que exige tu proyecto
FROM php:8.4-apache

# Instalamos dependencias del sistema y Node.js para Vite
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs

# Habilitamos el mod_rewrite de Apache (vital para Laravel)
RUN a2enmod rewrite

# Instalamos Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuramos el directorio de trabajo
WORKDIR /var/www/html

# Copiamos todos los archivos del proyecto
COPY . .

# Solucionamos el warning de Git sobre la propiedad del directorio
RUN git config --global --add safe.directory /var/www/html

# Instalamos dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# Instalamos dependencias de Node y compilamos Vite
RUN npm install
RUN npm run build

# Apuntamos Apache a la carpeta public de Laravel (Sintaxis actualizada)
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Damos permisos a las carpetas que Laravel necesita escribir
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponemos el puerto 80
EXPOSE 80