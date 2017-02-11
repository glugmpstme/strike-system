> Written wrt GNU/Linux 4.9.8-1-ARCH x86_64
> php 7.1.1, Zend Engine v3.1.0
> MariaDB Server 10.1.21

# MariaDB

## Starting server

`sudo systemctl start mariadb.service`

## Root login

`mysql -u root -p`

### Tip
> Do not forget to terminate SQL statements with a semicolon;

## Check current users with remote access privileged

`SELECT User, Host FROM mysql.user WHERE Host <> 'localhost';`

## Show databses

`show databases;`

## Use databse

`use <db_name>;`



# PHP

## php configuration

`/etc/php/php.ini`

### Tip
> If mysqli_connect does not work, ensure `extension=mysqli.so` is uncommented in config
