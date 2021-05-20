sed -i -e "s|MYSQL_DATABASE|'$MYSQL_DATABASE'|g" ./tmp/wp-config.php
sed -i -e "s|MYSQL_USER|'$MYSQL_USER'|g" ./tmp/wp-config.php
sed -i -e "s|MYSQL_PASSWORD|'$MYSQL_PASSWORD'|g" ./tmp/wp-config.php
sed -i -e "s|;daemonize = yes|daemonize = no|g" ./etc/php/7.3/fpm/php-fpm.conf
mv ./tmp/wp-config.php ./www/
mkdir -p /run/php/
/usr/sbin/php-fpm7.3