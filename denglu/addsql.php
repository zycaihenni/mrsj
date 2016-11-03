<?php
$name=$_GET["username"];
$pwd=$_GET['pwd'];


$mysql= new mysqli("localhost","root","","users");

if($mysql->connect_errno){
	die($mysql->connect_errno);
}


$mysql->query('set names utf8');

//$sqlstr = "insert into user2 values($name,$pwd)"; //插入
$sqlstr = "insert into user2 values(\"".$name."\",\"".$pwd."\")";




$result = $mysql->query($sqlstr);
    var_dump($result);
?>