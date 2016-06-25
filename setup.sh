#!/bin/bash
echo "To set up laravel to connect to a database fill out the info"
echo "DB_HOST for site"
read host
echo "DB_NAME for site"
read name
echo "DB_USER for site"
read user
echo "DB_PASS for site"
read pass

touch .env.local.php
cat <<EOT > .env.local.php
<?php

return array(
    'DB_HOST' => "$host",
    'DB_NAME' => "$name",
    'DB_USER' => "$user",
    'DB_PASS' => "$pass"
);
EOT
echo 'Created .env.local.php file with connection details to the database'

# echo "you still need to set up your database on the server"

################   STILL NEEDS WORK     ###########################



# echo "Do You need to create database on your server? (y/n)"
# read create
# #  Creating Database and Database User for the Site.
# if ( $create == 'y' ){
echo "Login information for mysql to create the database for the site"
echo "Mysql username: "
read mysql_username
echo "Mysql Password"
read mysql_password

	mysql --host=$host --user=$mysql_username --password="$mysql_password" -e "create database $name;"
	mysql --host=$host --user=$mysql_username --password="$mysql_password" -e "CREATE USER '"$user"'@'localhost' IDENTIFIED BY '"$pass"';"
	mysql --host=$host --user=$mysql_username --password="$mysql_password" -e "GRANT ALL PRIVILEGES ON $name.* TO '"$user"'@'localhost';"
	mysql --host=$host --user=$mysql_username --password="$mysql_password" -e "FLUSH PRIVILEGES;"

echo "Created Database!!"
composer install
composer update

php artisan generate:publish-templates
rm -rf app/templates
cp app/templates.temp app/templates

echo 'Templates Updated and Regested'

# }