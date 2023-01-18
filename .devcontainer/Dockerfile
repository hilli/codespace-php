FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  git \
  python2 \
  libzip-dev \
  unzip \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) bcmath gd zip mysqli exif pdo pdo_mysql

RUN curl -sL https://deb.nodesource.com/setup_18.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get install nodejs
RUN rm nodesource_setup.sh
RUN corepack enable
RUN yarn set version stable
RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT /home/workspace/site

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN useradd -ms /bin/bash vscode

RUN mkdir -p /home/workspace
RUN chown -R vscode:vscode /home/workspace