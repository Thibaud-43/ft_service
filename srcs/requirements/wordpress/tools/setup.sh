sed -i -e "s|MYSQL_DATABASE|'$MYSQL_DATABASE'|g" ./tmp/wp-config.php
sed -i -e "s|MYSQL_USER|'$MYSQL_USER'|g" ./tmp/wp-config.php
sed -i -e "s|MYSQL_PASSWORD|'$MYSQL_PASSWORD'|g" ./tmp/wp-config.php
mv ./tmp/wp-config.php ./www/
service php7.3-fpm start
tail -f /dev/null