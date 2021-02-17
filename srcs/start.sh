service mysql start
touch /var/www/html/index.php && echo "<?php phpinfo(); ?>" >> /var/www/html/index.php
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz
mv phpMyAdmin-4.9.7-all-languages.tar.gz /src/
tar xzf /src/phpMyAdmin-4.9.7-all-languages.tar.gz
mv /phpMyAdmin-4.9.7-all-languages /phpmyadmin
mv /phpmyadmin /var/www/html/
rm /var/www/html/phpmyadmin/config.sample.inc.php
mv /src/config.inc.php /var/www/html/phpmyadmin
chown -R www-data:www-data /var/www/html/phpmyadmin
chmod 660 /var/www/html/phpmyadmin/config.inc.php
mysql -u root < "/src/createdb.sql"  && \
mysql -u root < "/src/localhost.sql" && \
mysql -u root < "/src/dbuser.sql"
wget https://wordpress.org/latest.tar.gz
mv latest.tar.gz /src/
tar xzf /src/latest.tar.gz && mv wordpress /var/www/html/
rm /var/www/html/wordpress/wp-config-sample.php
mv /src/wp-config.php /var/www/html/wordpress
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/ssl/localhost.pem -keyout /etc/ssl/localhost.key -subj "/C=MA/ST=Khouribga/L=Khouribga/O=1337 School/OU=abettach/CN=localhost"
service nginx start
service php7.3-fpm start

/bin/bash
