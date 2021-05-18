FROM debian:buster

COPY ./conf/create_database.sql ./tmp/create_database.sql
COPY ./tools/setup.sh ./tmp/setup.sh
COPY ./conf/my.cnf ./tmp/my.cnf
RUN apt update && apt -y upgrade
RUN apt -y install mariadb-server mariadb-client
RUN chmod +x ./tmp/setup.sh
RUN rm /etc/mysql/my.cnf
RUN mv ./tmp/my.cnf /etc/mysql/my.cnf
CMD ./tmp/setup.sh

EXPOSE 3306