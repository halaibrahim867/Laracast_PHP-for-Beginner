<?php 

$database=require 'bootstrap.php';

$task =$database->selectAll('cis');

require 'index.view.php';