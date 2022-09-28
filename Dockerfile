# php version
FROM php:7.4.0-apache 
# mysqli
RUN docker-php-ext-install mysqli
# mod rewrite
RUN a2enmod rewrite

# GD Libary install for upload image
RUN apt-get update -y && apt-get install -y  libpng-dev 
RUN apt-get update -y && apt-get install -y  libjpeg62-turbo-dev
RUN apt-get update -y && apt-get install -y  libfreetype6-dev
RUN apt-get update -y && apt-get install -y  libmcrypt-dev
RUN apt-get update && apt-get install -y \
        zlib1g-dev
# configure gd for other type (jpeg, jpg)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j $(nproc) gd

# php.ini:
RUN echo 'opcache.file_update_protection=0\n\
opcache.memory_consumption=256\n\
opcache.max_accelerated_files=24000\n\
opcache.max_wasted_percentage=10\n\
opcache.fast_shutdown=1\n\
zlib.output_compression=On\n\
upload_max_filesize=512M\n\
max_input_vars=10000\n\
max_execution_time=30000\n\
post_max_size=512M\n' > /usr/local/etc/php/php.ini

# Move the default conf out of the way
#RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf_orig 
# Copy in your project's new nginx conf
#RUN cp env/nginx/nginx.conf /etc/nginx/nginx.conf


EXPOSE 8080
# EXPOSE 443