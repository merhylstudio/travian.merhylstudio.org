FROM php:7.1-apache

MAINTAINER Adrien Estanove <maghin@merhylstudio.com>

#=== Install PDO MySQL dependencie ===
# mysql-client
RUN docker-php-ext-install pdo_mysql

#=== Install php YAML dependencie ===
RUN buildRequirements="libyaml-dev" \
	&& apt-get update && apt-get install -y ${buildRequirements} \
	&& pecl install yaml \
	&& echo "extension=yaml.so" > /usr/local/etc/php/conf.d/ext-yaml.ini \
	&& apt-get purge -y ${buildRequirements} \
	&& rm -rf /var/lib/apt/lists/*

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
