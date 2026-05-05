FROM php:8.2-apache

WORKDIR /var/www/html

# Enable modules required by .htaccess rules.
RUN a2enmod rewrite headers deflate

# Use project Apache config with AllowOverride enabled.
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy application code.
COPY . /var/www/html

# Keep runtime permissions straightforward for Apache.
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
