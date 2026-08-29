FROM php:8.2-apache

# Sakinisha mifumo ya kutosha ya Linux na PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Amsha Apache mod_rewrite kwa ajili ya Laravel routing
RUN a2enmod rewrite

# Leta Composer ya kisasa
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy mradi mzima
COPY . .

# Sakinisha composer dependencies bila kuweka cache ngumu
RUN composer install --no-dev --optimize-autoloader

# Ipe Apache mamlaka kamili ya kuandika kwenye storage na cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Weka Document Root ielekee public folda
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# LAZIMA: Lazimisha Laravel kusoma Environment Variables za Render
RUN echo "Listen 80" >> /etc/apache2/ports.conf
RUN echo "PassEnv APP_KEY" >> /etc/apache2/apache2.conf
EXPOSE 80
