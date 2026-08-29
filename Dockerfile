FROM php:8.2-apache

# 1. Sakinisha mifumo ya kutosha ya Linux na PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# 2. Amsha Apache mod_rewrite kwa ajili ya Laravel routing
RUN a2enmod rewrite

# 3. Leta Composer ya kisasa
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# 4. Copy mradi mzima
COPY . .

# 5. Sakinisha composer dependencies
RUN composer install --no-dev --optimize-autoloader

# 6. SEHEMU YA MUHIMU ZAIDI: Tengeneza faili la SQLite na folda zote zilizokosekana
RUN mkdir -p /var/www/html/database \
    && touch /var/www/html/database/database.sqlite \
    && mkdir -p /var/www/html/storage/framework/cache/data \
    && mkdir -p /var/www/html/storage/framework/sessions \
    && mkdir -p /var/www/html/storage/framework/views \
    && mkdir -p /var/www/html/storage/logs \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/database \
    && chmod -R 775 /var/www/html/bootstrap/cache

# 7. Run database migrations kutengeneza meza za sessions hewani
RUN php artisan migrate --force

# 8. Weka Document Root ielekee public folda la Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 9. Lazimisha Apache ipitishe variables za Render
RUN echo "PassEnv APP_KEY" >> /etc/apache2/apache2.conf
RUN echo "PassEnv DB_CONNECTION" >> /etc/apache2/apache2.conf
RUN echo "PassEnv DB_DATABASE" >> /etc/apache2/apache2.conf

EXPOSE 80
