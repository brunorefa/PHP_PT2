<?php

session_id('1gf0t7foiih0m5o69j4phmq6khs');
require_once("config.php");
echo session_regenerate_id() ;
echo session_id();
var_dump($_SESSION);

?>