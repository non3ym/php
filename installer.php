<?php
//GENERAL VARIABLES
$address = "localhost";
$user = "root";
$password = "";
$database = "school";
$table = "students";

// CONNECTION TO SQL
$connection_stage1 = mysqli_connect($address,$user,$password);
if(!$connection_stage1){
	echo "Connection with SQL localhost server has failed!<br>";
}else{
	echo "Connection with SQL localhost server does successfully!<br>";
}

//DATABASE CREATION
$db = "CREATE DATABASE ".$database;
if(!mysqli_query($connection_stage1,$db)){
	echo "Something went wrong!<br>";
}else{
echo "Database should be created!<br>";}

mysqli_close($connection_stage1);

//CONNECTION TO NEW DATABASE
$connection_stage2 = mysqli_connect($address,$user,$password,$database);
if(!$connection_stage2){
	echo "Connection with new database has failed!<br>";
}else{
	echo "Connection with new database does successfully!<br>";
}

//TABLE CREATION
$new_table = 'CREATE TABLE '.$table.'(
id INT NOT NULL AUTO_INCREMENT,
name CHAR(255) NOT NULL,
surname CHAR(255) NOT NULL,
country CHAR(255) NOT NULL,
class CHAR(255) NOT NULL,
age INT NOT NULL,
PRIMARY KEY(id)
)';

if(!mysqli_query($connection_stage2,$new_table)){
	echo "Something went wrong during table creation stage!<br>";
}else{
	echo "Table should be created!<br>";
}

 //TABLE DATA IMPORT
$data = 'INSERT INTO students(name,surname,country,class,age)
VALUES("John","Smith","England","2T","16")';
if(!mysqli_query($connection_stage2,$data)){
	echo "Something went wrong during data import!<br>";
}else{
	echo "Data should be imported!<br>";
}

mysqli_close($connection_stage2);
echo "Everything is installed, so we're closing connection."
?>