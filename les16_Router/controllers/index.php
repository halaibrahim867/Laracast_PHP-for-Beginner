<?php

$tasks=$database->selectAll('cis');

require 'views/index.view.php';