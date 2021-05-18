\set db_name `echo "$MYSQL_DATABASE"`
\set db_user `echo "$MYSQL_USER"`
\set db_pass `echo "$MYSQL_PASSWORD"`

CREATE DATABASE 'db_name' DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE USER 'db_user'@localhost IDENTIFIED BY 'db_pass';

GRANT ALL ON 'db_name'.* TO 'db_user'@'localhost';

FLUSH PRIVILEGES;
