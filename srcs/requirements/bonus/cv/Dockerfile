FROM alpine

COPY ./conf/nginx_service.conf ./tmp/nginx_service.conf
COPY ./conf/cv ./tmp/cv

RUN apk update
RUN apk upgrade
RUN apk add bash
RUN apk add openrc --no-cache 
RUN apk add nginx

RUN adduser -D -g 'www' www
RUN mkdir www
RUN mv ./tmp/cv ./www/
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mkdir -p /run/nginx
RUN mv ./tmp/nginx_service.conf ./etc/nginx/nginx.conf

ENTRYPOINT ["nginx", "-g", "daemon off;"]
EXPOSE 8000
