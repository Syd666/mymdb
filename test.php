<?php

require_once 'config.inc.php';
require_once 'models/modelDatabase.php';
require_once 'models/modelMysql.php';
require_once 'models/modelMovie.php';

modelDatabase::getInstance();

$movie = new modelMovie();
$movie->getAll();
$movie->getById(1);

?>