# Use the official PHP image as the base image
FROM php:8.1-fpm-alpine

# Set the time zone
RUN apk --update add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata && \
    rm -rf /var/cache/apk/*


# Copy the custom PHP configuration file
COPY php.ini-development /usr/local/etc/php/php.ini

# Set the working directory
WORKDIR /src/php_app

# Start the PHP development server
CMD ["php", "-S", "0.0.0.0:9000", "-t", "/src/php_app"]
