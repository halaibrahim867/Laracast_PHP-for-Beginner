<?php


$config=require 'config.php';


require 'core/Router.php ';
require 'core/Request.php';
require 'core/databases/connection.php';
require 'core/databases/QueryBuilder.php';


return new QueryBuilder(
    Connection::make($config['database'])
);