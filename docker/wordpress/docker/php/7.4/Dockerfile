FROM php:7.4-apache

COPY php.ini /usr/local/etc/php/

RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# PHPで使うものをいれる
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libpng-dev \
libjpeg-dev \
libpq-dev \
&& docker-php-ext-configure gd --with-jpeg=/usr/include/ \
&& docker-php-ext-install pdo_mysql mysqli bcmath gd

# modRewriteを有効化する
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite

# nodeも入れておく
RUN apt-get install -y nodejs npm && npm install n -g && n lts
