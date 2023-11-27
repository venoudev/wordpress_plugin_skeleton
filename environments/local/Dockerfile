FROM wordpress:php7.4-apache

RUN apt-get update && apt-get install -y \
    vim

RUN apt-get update && \
    apt-get install -y libxml2-dev \
    unzip

RUN docker-php-ext-install soap

USER 0
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer

RUN yes | pecl install xdebug-3.1.6 \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/xdebug.ini