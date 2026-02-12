FROM php:8.2-cli

# Dependencias básicas
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip curl \
    && docker-php-ext-install pdo pdo_mysql

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# App
WORKDIR /app
COPY . .

# Instalar Laravel
RUN composer install --no-dev --optimize-autoloader

# Laravel setup
RUN php artisan key:generate || true
RUN php artisan config:cache || true

# Puerto Render
ENV PORT=10000
EXPOSE 10000

# Start
CMD php artisan migrate --force && php -S 0.0.0.0:$PORT -t public
