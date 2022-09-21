FROM php:7.4.0-apache 
RUN docker-php-ext-install mysqli

# php.ini:
# upload_max_filesize and post_max_size here match production, per T246930
RUN echo 'opcache.file_update_protection=0\n\
opcache.memory_consumption=256\n\
opcache.max_accelerated_files=24000\n\
opcache.max_wasted_percentage=10\n\
opcache.fast_shutdown=1\n\
zlib.output_compression=On\n\
upload_max_filesize=100M\n\
post_max_size=100M\n' > /usr/local/etc/php/php.ini

# Move the default conf out of the way
#RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf_orig 
# Copy in your project's new nginx conf
#RUN cp env/nginx/nginx.conf /etc/nginx/nginx.conf


EXPOSE 8080
# EXPOSE 443