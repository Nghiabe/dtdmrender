FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy source
COPY . .

# Ensure .env is copied
COPY .env .env

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permission
RUN chmod -R 775 storage bootstrap/cache

# Clear cache and run migrate + server
CMD php artisan config:cache && \
    php artisan session:table && \
    php artisan migrate --force && \
    php artisan serve --host=0.0.0.0 --port=3000
