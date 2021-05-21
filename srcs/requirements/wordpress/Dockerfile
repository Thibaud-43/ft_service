FROM debian:buster

COPY ./tools/setup.sh ./tmp/setup.sh
COPY ./conf/www.conf ./tmp/www.conf
COPY ./conf/wp-config.php ./tmp/wp-config.php

RUN apt update
RUN apt -y upgrade
RUN apt install -y php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap
RUN apt install -y php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip
RUN apt install sudo
RUN mkdir -p /www
RUN chown -R www-data:www-data /www
RUN chmod -R 755 /www
RUN chmod +x ./tmp/setup.sh
RUN rm /etc/php/7.3/fpm/pool.d/www.conf && mv /tmp/www.conf /etc/php/7.3/fpm/pool.d/www.conf

ENTRYPOINT ./tmp/setup.sh
EXPOSE 9000