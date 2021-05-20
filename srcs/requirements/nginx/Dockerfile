FROM alpine

COPY ./conf/nginx_service.conf ./tmp/nginx_service.conf

RUN apk update
RUN apk upgrade
RUN apk add bash
RUN apk add openrc --no-cache 
RUN apk add nginx
RUN apk add openssl

RUN adduser -D -g 'www' www
RUN mkdir www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mkdir -p /run/nginx
RUN mv ./tmp/nginx_service.conf ./etc/nginx/nginx.conf
RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/trouchon42fr.pem -keyout /etc/nginx/ssl/trouchon42fr.key -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=trouchon/CN=trouchon.42.fr"

ENTRYPOINT nginx -g "daemon off;"
EXPOSE 80
EXPOSE 443