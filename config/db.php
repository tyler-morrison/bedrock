<?php
/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

 return [
   'server'      => getenv('DB_HOST') ?: 'localhost',
   'port'        => getenv('DB_PORT') ?: '3306',
   'user'        => getenv('DB_USER'),
   'password'    => getenv('DB_PASSWORD'),
   'database'    => getenv('DB_NAME'),
   'tablePrefix' => getenv('DB_PREFIX') ?: 'craft',
   'charset'     => getenv('DB_CHARSET') ?: 'utf8',
   'collation'   => getenv('DB_COLLATION') ?: 'utf8_unicode_ci',
   'unixSocket'  => getenv('DB_SOCKET') ?: '',
 ];
