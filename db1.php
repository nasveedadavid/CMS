<?php
$servername="localhost";
$username="root1";
$password="01november2000";
$dbname="cms";
$conn=mysqli_connect("$servername","$username","$password","$dbname");
if(!$conn)
{
die('could not connecct mysqli'.mysqli_error());
}
?>