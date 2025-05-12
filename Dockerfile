FROM php:8.2-fpm

# Cài đặt các extension cần thiết
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cài đặt Node.js và npm (nếu bạn cần sử dụng Node.js cho frontend)
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

# Set working directory
WORKDIR /var/www

# Copy toàn bộ mã nguồn vào container
COPY . .

# Cài đặt các dependencies của Laravel
RUN composer install --no-dev --optimize-autoloader

# Cài đặt Node.js dependencies (nếu bạn sử dụng frontend assets)
RUN npm install

# Phân quyền cho thư mục Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Cấu hình và khởi động ứng dụng (không dùng php artisan serve trong container)
CMD php artisan config:cache && \
    php artisan session:table && \
    php artisan migrate --force && \
    nginx -g 'daemon off;'
