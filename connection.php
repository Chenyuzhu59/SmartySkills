<?php

$host='localhost';
$user='root';
$password='';
$database='smartyskills';
$link= mysqli_connect($host, $user, $password, $database) or die("mysql wrong");
mysqli_select_db($link,$database);


