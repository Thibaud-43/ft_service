FROM debian:buster

COPY ./conf/create_database.sql ./tmp/create_database.sql
COPY ./conf/setup.sh ./tmp/setup.sh
RUN apt update && apt -y upgrade
RUN apt -y install mariadb-server mariadb-client
RUN chmod +x ./tmp/setup.sh
CMD ./tmp/setup.sh

EXPOSE 3306