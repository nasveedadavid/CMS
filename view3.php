<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="red">
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>READ DATA OF FACULTY SALARY</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysqli_connect("localhost", "ROOT", "01november2000"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"cms"); // Selecting Database
//MySQL Query to read data
$query = mysqli_query($connection,"select * from fsalary");
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='view3.php?ID={$row['ID']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['ID'])) {
$ID = $_GET['ID'];
$query1 = mysqli_query($connection,"select * from fsalary where ID=$ID");
while ($row1 = mysqli_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>ID:</span> <?php echo $row1['ID']; ?><br>
<span>Name:</span> <?php echo $row1['name']; ?><br>
<span>E-mail:</span> <?php echo $row1['email']; ?><br>
<span>Contact No:</span> <?php echo $row1['contact']; ?><br>
<span>salary:</span> <?php echo $row1['salary']; ?>
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysqli_close($connection); // Closing Connection with Server
?>
     <a href="http://localhost/cms/testsite/ins3.html">INSERT RECORDS</a><br>
<a href="http://localhost/cms/testsite/edit3.php">EDIT RECORDS</a><br> 
<a href="http://localhost/cms/testsite/del3.php">DELETE RECORDS</a>
   
</body>
</html>
