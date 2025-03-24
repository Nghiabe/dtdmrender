FROM php:8.1-fpm

# Cài các extension cần thiết
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set thư mục làm việc
WORKDIR /var/www

# Copy toàn bộ mã nguồn vào container
COPY . .

# Cài thư viện PHP
RUN composer install --no-dev --optimize-autoloader

# Phân quyền cho Laravel
RUN chmod -R 775 storage bootstrap/cache

# Thiết lập biến môi trường để PHP connect với MySQL (có thể override bằng Railway dashboard)
ENV DB_CONNECTION=mysql
ENV DB_HOST=mysql.railway.internal
ENV DB_PORT=3306
ENV DB_DATABASE=railway
ENV DB_USERNAME=root
ENV DB_PASSWORD=qMQnQzHihgLzogsKDpFAGKLxijPLoEzE


# Chạy Laravel Server
CMD php artisan serve --host=0.0.0.0 --port=3000
