<?php

$config=require 'config.php';
require 'databases/connection.php';
require 'databases/QueryBuilder.php';


return new QueryBuilder(
    Connection::make($config['database'])
);