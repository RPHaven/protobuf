ARG PHP_IMAGE_APP_VERSION="cli-bullseye"

FROM "php:${PHP_IMAGE_APP_VERSION}" as base
RUN apt update
RUN apt install -y libyaml-dev libicu-dev libsodium-dev
RUN pecl install -o -f pcntl posix yaml pcov icu
RUN docker-php-ext-configure intl
RUN docker-php-ext-install bcmath intl pdo_mysql sodium sockets
RUN docker-php-ext-enable opcache bcmath yaml pcov pdo_mysql sodium sockets opcache

FROM base as grpc
RUN apt install -y libz-dev
RUN pecl install -o -f grpc
RUN docker-php-ext-enable grpc

FROM base AS phpcov
WORKDIR /phpcov
RUN apt install -y wget
RUN wget 'https://phar.phpunit.de/phpcov.phar'

FROM base AS composer
WORKDIR /composer
ADD dev/docker/php/composer.sh ./
RUN chmod +x ./composer.sh
RUN ./composer.sh


FROM grpc as rphaven
ARG LOCAL_BIN_PATH=/usr/local/bin
ARG GITHUB_TOKEN
ENV APP_ENV=dev

COPY --from=composer /composer/composer.phar "${LOCAL_BIN_PATH}/composer"
RUN chmod +x "${LOCAL_BIN_PATH}/composer"

RUN apt install -y git ssh

WORKDIR /RPHaven

# Copy in only the files and directories needed for the app from the working directory
ADD ./.env ./
ADD ./composer.json ./
ADD ./composer.lock ./
ADD ./php ./php
ADD ./proto ./proto

RUN mkdir -p /root/.composer
RUN ${LOCAL_BIN_PATH}/composer config --global --auth github-oauth.github.com ${GITHUB_TOKEN}
RUN ${LOCAL_BIN_PATH}/composer install

FROM grpc as proto
ARG LOCAL_BIN_PATH=/usr/local/bin

COPY --from=composer /composer/composer.phar "${LOCAL_BIN_PATH}/composer"
RUN chmod +x "${LOCAL_BIN_PATH}/composer"

COPY --from=rphaven /root/.composer/ /root/.composer/

WORKDIR /cache
VOLUME /cache

RUN chown root:root /cache
RUN chmod 0777 /cache

WORKDIR /RPHaven
VOLUME /RPHaven
COPY --from=rphaven /RPHaven /RPHaven

RUN composer validate
RUN chown -R www-data:www-data /RPHaven

FROM proto as dev
ENV GITHUB_TOKEN="${GITHUB_TOKEN}"
COPY --from=phpcov /phpcov/phpcov.phar "${LOCAL_BIN_PATH}/phpcov"
RUN chmod +x "${LOCAL_BIN_PATH}/phpcov"
RUN pecl install xdebug
RUN apt install -y git
RUN docker-php-ext-enable xdebug
ADD dev/docker/php/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


