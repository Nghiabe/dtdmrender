FROM php:8.2-fpm

# Cài extension cần thiết
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Đặt thư mục làm việc
WORKDIR /var/www

# Copy toàn bộ mã nguồn vào container
COPY . .

# Cài thư viện Laravel
RUN composer install --no-dev --optimize-autoloader

# Set quyền cho storage và cache
RUN chmod -R 775 storage bootstrap/cache

# ✅ Lệnh CMD: chạy migrate trước khi khởi chạy server
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=3000
