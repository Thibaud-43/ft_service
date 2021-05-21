FROM debian:buster

COPY ./conf/nginx_service.conf ./tmp/nginx_service.conf
COPY ./tools/setup.sh ./tmp/setup.sh

RUN apt -y update
RUN apt -y upgrade
RUN apt install -y nginx wget
RUN apt-get install -y php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap 


RUN mkdir -p /www
RUN wget "http://www.adminer.org/latest.php" -O /www/index.php
RUN chown -R www-data:www-data /www
RUN chmod -R 755 /www
RUN mkdir -p /run/nginx
RUN chmod +x ./tmp/setup.sh
RUN rm ./etc/nginx/sites-available/default
RUN mv ./tmp/nginx_service.conf ./etc/nginx/sites-available/default

ENTRYPOINT ["./tmp/setup.sh"]
EXPOSE 8080
