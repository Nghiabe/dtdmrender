FROM php:8.2-fpm

# Cài đặt các extension cần thiết
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www

# Copy toàn bộ mã nguồn vào container
COPY . .

# Cài đặt các dependencies của Laravel
RUN composer install --no-dev --optimize-autoloader

# Phân quyền cho thư mục Laravel
RUN chmod -R 775 storage bootstrap/cache

# Cấu hình và khởi động ứng dụng
CMD php artisan config:cache && \
    php artisan session:table && \
    php artisan migrate --force && \
    php artisan serve --host=0.0.0.0 --port=8000
