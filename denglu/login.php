<?php
$name=$_GET["username"];
$pwd=$_GET['pwd'];
if ($name=="zhangsan"&&$pwd=="111") {
echo "{\"type\":\"success\"}";

} else {
echo "{\"type\":\"shibai\"}";
}

//  echo "string";
?>
