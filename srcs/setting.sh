# ACCES
chown -R www-data /var/www/*
chmod -R 755 /var/www/*


# CONFIGURATION NGINX
mv /localhost /etc/nginx/sites-available/ 
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/

# CERTIFICAT SSL
mkdir /etc/nginx/ssl
openssl req -x509 -sha256 -nodes -newkey rsa:4096 -keyout localhost.key -out localhost.pem -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=42Paris/CN=ft_server"
mv /localhost.key /localhost.pem /etc/nginx/ssl


# CONFIGURATION PHPMYADMIN
tar zxvf /phpMyAdmin-5.1.0-all-languages.tar.gz
mv /phpMyAdmin-5.1.0-all-languages.tar.gz /tmp
mv /phpMyAdmin-5.1.0-all-languages /usr/share/phpmyadmin
ln -s /usr/share/phpmyadmin /var/www/html/

# CONFIGURATION WORDPRESS
tar zxvf latest.tar.gz
mv /latest.tar.gz /tmp
mv /wp-config.php /wordpress
mv /wordpress /usr/share/
ln -s /usr/share/wordpress /var/www/html/

# CONFTGURATION MYSQL
service mysql start
echo "GRANT ALL PRIVILEGES ON *.* TO 'lunovill'@'localhost' IDENTIFIED BY '42';" | mariadb -u root
echo "FLUSH PRIVILEGES;" | mariadb -u root
echo "CREATE DATABASE wp_database DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mariadb -u root
echo "GRANT ALL ON wp_database.* TO 'wp_user'@'localhost' IDENTIFIED BY 'wp_password';" | mariadb -u root
echo "FLUSH PRIVILEGES;" | mariadb -u root

service php7.3-fpm start
service mysql restart
service nginx start