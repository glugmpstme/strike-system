> Written w.r.t. _php 7.1.1_ and _Zend Engine v3.1.0_ with 
> _MariaDB Server 10.1.21_ running on *GNU/Linux 4.9.8-1-ARCH x86_64*

# MariaDB

## Starting server

```shell
sudo systemctl start mariadb.service
```

## Root login

```shell
mysql -u root -p
```

### Tip
> Do not forget to terminate SQL statements with a semicolon;

## Check current users with remote access privileged

```sql
SELECT User, Host FROM mysql.user WHERE Host <> 'localhost';
```

## Show databses

```sql
show databases;
```

## Use databse

```sql
use db_name;
```

## Tables

### karma

```sql
CREATE TABLE karma
(
uid int(8) NOT NULL,
name varchar(160) NOT NULL,
nice int(1),
PRIMARY KEY (uid)
);
```
### Values

```sql
INSERT INTO karma VALUES (87724018, "Pranjali Basmatkar", 0);
INSERT INTO karma VALUES (67747814, "Aishwarya Sivakumar", 9);
INSERT INTO karma VALUES (72733414, "Anushri Arora", 4);
```

# PHP

## php configuration

`/etc/php/php.ini`

### Tip
> If mysqli_connect does not work, ensure `extension=mysqli.so` is uncommented in config
