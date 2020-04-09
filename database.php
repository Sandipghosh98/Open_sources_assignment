<?php
$linl=mysqli_connect("localhost","root","123456789");
$sq="create database assignment7";
$qur1=mysqli_query($linl,$sq);

if($qur1){
    echo " database created";
}
else{
    echo "already created";
}
$linl=mysqli_connect("localhost","root","123456789","assignment7");
$sq1="create table details (ID int(10) AUTO_INCREMENT PRIMARY KEY, first_name varchar(50), last_name varchar(50), email varchar(50));";
$qur1=mysqli_query($linl,$sq1);
if($qur1){
    echo " table created";
}
else{
    echo "table already created";
}
?>
