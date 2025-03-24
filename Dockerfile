FROM php:8.2-fpm

# Cài các extension
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy toàn bộ mã nguồn
COPY . .

# Cài đặt Composer
RUN composer install --no-dev --optimize-autoloader

# Phân quyền cho Laravel
RUN chmod -R 775 storage bootstrap/cache

# Build và chạy
CMD php artisan config:cache && \
    php artisan session:table && \
    php artisan migrate --force && \
    php artisan serve --host=0.0.0.0 --port=3000
