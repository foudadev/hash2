<?php
require_once('easybitcoin.php');
$bitcoin = new Bitcoin('username','password');
$test = $bitcoin->getinfo();
var_dump($test);




