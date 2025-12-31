FROM php:8.2-fpm-alpine

# Instalar extensiones necesarias y dependencias
RUN apk add --no-cache \
    build-base \
    curl \
    git \
    npm \
    sqlite \
    sqlite-dev \
    && docker-php-ext-install -j$(nproc) \
    pdo \
    pdo_sqlite \
    && docker-php-ext-enable pdo pdo_sqlite

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer el directorio de trabajo
WORKDIR /app

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de PHP
RUN composer install --prefer-dist --no-interaction

# Instalar dependencias de Node.js
RUN npm install

# Dar permisos correctos
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

# Exponer puerto
EXPOSE 8000

CMD ["php-fpm"]
