# Base image dari PHP 8.2 (sesuai composer.json)
FROM php:8.2-fpm-alpine

# Instal alat dan ekstensi PHP yang dibutuhkan
RUN apk add --no-cache \
    git \
    curl \
    libxml2-dev \
    libzip-dev \
    oniguruma-dev \
    && docker-php-ext-install pdo pdo_mysql opcache \
    && docker-php-ext-enable opcache

# Instal Composer global
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy kode proyek
COPY . .

# Jalankan Composer Install di dalam kontainer
RUN composer install --ignore-platform-reqs --no-dev --optimize-autoloader

# Tetapkan izin folder storage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Jalankan PHP-FPM sebagai user www-data
USER www-data
CMD ["php-fpm"]