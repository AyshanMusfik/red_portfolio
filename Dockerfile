# Multi-stage Dockerfile for Laravel on Render

# ==========================================
# Stage 1: Build Frontend Assets (Vite)
# ==========================================
FROM node:20-alpine AS frontend
WORKDIR /app

# Install Node dependencies
COPY package*.json ./
RUN npm ci

# Copy frontend source files and compile assets
COPY . .
RUN npm run build

# ==========================================
# Stage 2: PHP 8.2 Application Environment
# ==========================================
FROM php:8.2-cli

# Set working directory
WORKDIR /var/www/html

# Environment defaults
ENV DEBIAN_FRONTEND=noninteractive \
    COMPOSER_ALLOW_SUPERUSER=1 \
    PORT=8000

# Install system dependencies and required PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql \
        mbstring \
        gd \
        zip \
        bcmath \
        opcache \
        pcntl \
        exif \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer from official Composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy composer manifests first to cache dependencies layer
COPY composer.json composer.lock ./

# Install production dependencies without running scripts
RUN composer install --no-dev --no-interaction --prefer-dist --no-scripts --no-autoloader

# Copy application source code
COPY . .

# Copy compiled frontend assets from frontend stage
COPY --from=frontend /app/public/build ./public/build

# Generate optimized Composer autoloader
RUN composer dump-autoload --optimize --no-dev

# Ensure storage and bootstrap cache directories exist with correct permissions
RUN mkdir -p storage/framework/cache/data \
             storage/framework/sessions \
             storage/framework/views \
             storage/logs \
             bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expose default port (Render will override $PORT at runtime)
EXPOSE 8000

# Start command: runs Laravel development server on 0.0.0.0 with dynamic $PORT
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=$PORT"]
