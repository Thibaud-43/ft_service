FROM alpine

COPY ./conf/nginx_service.conf ./tmp/nginx_service.conf

RUN apk update
RUN apk upgrade
RUN apk add bash
RUN apk add openrc --no-cache 
RUN apk add nginx

RUN mkdir www
RUN adduser -D -g 'www' www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mkdir -p /run/nginx
RUN mv ./tmp/nginx_service.conf ./etc/nginx/nginx.conf

CMD nginx -g "daemon off;"
EXPOSE 9000