<?php

require 'function.php';
//require 'Task.php';

$pdo=connectToDb();

$statment =$pdo->prepare('select * from student');

$statment->execute();
echo "<pre>";

var_dump($statment->fetchAll(PDO::FETCH_OBJ));
echo "</pre>";
require 'index.view.php';