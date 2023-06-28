# FROM php:8.1-fpm

# # Set working directory
# WORKDIR /var/www

# # Add docker php ext repo
# ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# # Install php extensions
# RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
#     install-php-extensions mbstring pdo_mysql zip exif pcntl gd memcached

# # Install dependencies
# RUN apt-get update && apt-get install -y \
#     build-essential \
#     libpng-dev \
#     libjpeg62-turbo-dev \
#     libfreetype6-dev \
#     locales \
#     zip \
#     jpegoptim optipng pngquant gifsicle \
#     unzip \
#     git \
#     curl \
#     lua-zlib-dev \
#     libmemcached-dev \
#     nginx

# # Install supervisor
# RUN apt-get install -y supervisor

# # Install composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# # Add user for laravel application
# RUN groupadd -g 1000 www
# RUN useradd -u 1000 -ms /bin/bash -g www www

# # Copy code to /var/www
# COPY --chown=www:www-data . /var/www

# # add root to www group
# RUN chmod -R ug+w /var/www/storage

# # Copy nginx/php/supervisor configs
# RUN cp docker/supervisor.conf /etc/supervisord.conf
# RUN cp docker/php.ini /usr/local/etc/php/conf.d/app.ini
# RUN cp docker/nginx.conf /etc/nginx/sites-enabled/default

# # PHP Error Log Files
# RUN mkdir /var/log/php
# RUN touch /var/log/php/errors.log && chmod 777 /var/log/php/errors.log

# # Deployment steps
# # --optimize-autoloader --no-dev
# RUN composer install 
# RUN chmod +x /var/www/docker/run.sh

# EXPOSE 8081
# ENTRYPOINT ["/var/www/docker/run.sh"]

FROM debian:latest
RUN apt update
RUN apt install php -y
RUN apt install -y php8.2-fpm php8.2-ctype php8.2-curl php8.2-dom php8.2-Fileinfo
RUN apt install -y filter php8.2-Mbstring php8.2-pdo php8.2-Tokenizer php8.2-XML php8.2-mysql
RUN apt install -y nginx

COPY . /app
WORKDIR /app
RUN chown -R www-data:www-data /app
RUN chmod -R 775 /app

RUN cp /app/localhost.conf /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled

CMD service php8.2-fpm start && service nginx start && tail -F /var/log/nginx/access.log
#CMD service php8.2-fpm start && nginx -g 'daemon off;'
EXPOSE 80