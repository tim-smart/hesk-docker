FROM php:apache

WORKDIR /srv

# Copy files
COPY --chown=www-data:www-data hesk ./
COPY --chown=www-data:www-data hesk_settings.inc.php ./

# Install default site
COPY vhost.conf /etc/apache2/sites-enabled/000-default.conf

# Enable php extensions and apache rewrite module
RUN apt-get update && \
    apt-get install -y libc-client-dev libkrb5-dev zlib1g-dev libpng-dev && \
    docker-php-ext-configure imap --with-kerberos --with-imap-ssl && \
    docker-php-ext-install gd mysqli imap && \
    a2enmod rewrite

# Add entrypoint
COPY docker-entrypoint.sh /
ENTRYPOINT ["/docker-entrypoint.sh"]
