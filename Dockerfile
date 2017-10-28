FROM php:7.1-apache

MAINTAINER Adrien Estanove <maghin@merhylstudio.com>

#=== Configure apache ===
RUN { \
    echo '<VirtualHost *:80>'; \
    echo 'ServerName travian'; \
    echo 'DocumentRoot /var/www/html/web'; \
    echo; \
    echo '<Directory /var/www/html/web>'; \
    echo '\tOptions -Indexes'; \
    echo '\tAllowOverride none'; \
    echo '</Directory>'; \
    echo '</VirtualHost>'; \
  } | tee "$APACHE_CONFDIR/sites-available/travian.conf" \
  \
  && a2ensite travian \
  && a2dissite 000-default \
  && echo "ServerName localhost" >> "$APACHE_CONFDIR/apache2.conf"

#=== Configure php ===
RUN { \
    echo 'date.timezone = Europe/Paris'; \
    echo 'register_globals = off'; \
    echo 'safe_mode = off'; \
    echo 'memory_limit = 32M'; \
    echo 'file_upload = off'; \
} | tee "$PHP_INI_DIR/php.ini"

COPY app .
