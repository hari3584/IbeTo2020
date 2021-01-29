<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$sql="CREATE DATABASE mydba;
CREATE TABLE form_element(
id int(10) NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
contact varchar(255) NOT NULL,
PRIMARY KEY (id)
)"
$db = mysql_select_db("mydba", $connection); // Selecting Database
//Fetching Values from URL
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$password2=$_POST['password1'];
//Insert query
$query = mysql_query("insert into form_element(name, email, password) values ('$name2', '$email2', '$password2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>