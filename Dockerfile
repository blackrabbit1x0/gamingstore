FROM php:8.0-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY games/ /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Configure Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && echo '<Directory /var/www/html/>' > /etc/apache2/conf-available/directory-config.conf \
    && echo '    Options Indexes FollowSymLinks' >> /etc/apache2/conf-available/directory-config.conf \
    && echo '    AllowOverride All' >> /etc/apache2/conf-available/directory-config.conf \
    && echo '    Require all granted' >> /etc/apache2/conf-available/directory-config.conf \
    && echo '    DirectoryIndex home.php index.php' >> /etc/apache2/conf-available/directory-config.conf \
    && echo '</Directory>' >> /etc/apache2/conf-available/directory-config.conf \
    && a2enconf directory-config