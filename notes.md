# MariaDB

## Starting server

`sudo systemctl start mariadb.service`

## Root login

`mysql -u root -p`

> Do not forget to terminate SQL statements with a semicolon;

## Check current users with remote access privileged

`SELECT User, Host FROM mysql.user WHERE Host <> 'localhost';`

## Show databses

`show databases;`