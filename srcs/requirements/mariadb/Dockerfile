FROM debian:buster

COPY ./conf/wordpress.sql ./tmp/wordpress.sql
COPY ./tools/setup.sh ./tmp/setup.sh
COPY ./conf/my.cnf ./tmp/my.cnf
RUN apt update && apt -y upgrade
RUN apt -y install mariadb-server mariadb-client
RUN chmod +x ./tmp/setup.sh
RUN rm /etc/mysql/my.cnf
RUN mv ./tmp/my.cnf /etc/mysql/my.cnf
RUN chmod 0444 /etc/mysql/my.cnf
ENTRYPOINT ["./tmp/setup.sh"]


EXPOSE 3306