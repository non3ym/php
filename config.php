<?php
$table = "school";
$connection = mysqli_connect("localhost","root","",$table);

if(!$connection){
echo "Connection has failed!";
}
?>