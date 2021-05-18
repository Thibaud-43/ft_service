FROM debian:buster

COPY ./conf/nginx_service.conf ./tmp/nginx_service.conf
COPY ./tools/setup.sh ./tmp/setup.sh

RUN apt update
RUN apt -y upgrade
RUN apt install -y nginx
RUN apt install -y php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap
RUN apt install -y php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip
RUN apt install sudo
RUN mkdir -p www/wordpress
RUN chown www-data:www-data ./www
RUN chmod 744 ./www
RUN chmod +x ./tmp/setup.sh
RUN rm ./etc/nginx/sites-available/default
RUN mv ./tmp/nginx_service.conf ./etc/nginx/sites-available/default


CMD ./tmp/setup.sh
EXPOSE 9000