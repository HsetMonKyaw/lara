<?php
session_start();
echo "Day 7 success";

$education=$_SESSION['education'];
echo $_GET['name'];
var_dump($education);

unset($_SESSION['education']);
var_dump($_SESSION['education']);
$_SESSION['test']="admin";
var_dump($_SESSION);
echo "session id<br>";
echo session_id();
session_destroy();
echo "after destroy<br>";
var_dump($_SESSION);
echo "session id<br>";
echo session_id();

?>