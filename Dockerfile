FROM php:8.1-apache

RUN docker-php-ext-install pdo pdo_mysql \
    && apt-get update \
    && apt-get install -y wget \
    && wget -O phpunit https://phar.phpunit.de/phpunit-10.phar \
    && chmod +x phpunit \
    && mv phpunit /usr/local/bin/phpunit \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*



