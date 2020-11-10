<?php
$servername="localhost";
$username="ROOT";
$password="01november2000";
$dbname="cms";
$conn=mysqli_connect("$servername","$username","$password","$dbname");
if(!$conn)
{
die('could not connecct mysqli'.mysqli_error());
}
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$ID = $_POST['ID'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$salary = $_POST['salary'];
$query = "insert into fsalary(ID,name,email,contact,salary) values ('$ID','$name', '$email', '$contact', '$salary')";
if(mysqli_query($conn,$query))
	{
		echo"<br/><br/><span>Data Inserted successfully...!!</span> ";
	}
	else
	{
		echo"ERROR:".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>