# Base image
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libicu-dev \
    curl \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    zip \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl pdo pdo_mysql mbstring zip

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application files
COPY . /var/www

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
