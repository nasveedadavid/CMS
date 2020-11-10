
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="red">
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>UPDATA DATA OF FACULTY SALARY</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysqli_connect("localhost","ROOT","01november2000","cms");

if (isset($_GET['submit'])) {
$ID= $_GET['ID'];
$name= $_GET['name'];
$email= $_GET['email'];
$contact= $_GET['contact'];
$salary= $_GET['salary'];
$query = mysqli_query($connection,"update fsalary set
name='$name', email='$email', contact='$contact',
salary='$salary' where ID='$ID'");
}
$result = mysqli_query($connection,"select * from fsalary");
while ($row = mysqli_fetch_array($result)) {
echo "<b><a href='edit3.php?update={$row['ID']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 =mysqli_query($connection,"select * from fsalary where ID=$update");
while ($row1 = mysqli_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='ID' value='{$row1['ID']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='name' value='{$row1['name']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='email' value='{$row1['email']}' />";
echo "<br />";
echo "<label>" . "Mobile:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='contact' value='{$row1['contact']}' />";
echo "<br />";
echo "<label>" . "salary:" . "</label>" . "<br />";
echo "<input class='input' type='text' name='salary' value='{$row1['salary']}' height='5'/>";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysqli_close($connection);
?>
<a href="http://localhost/cms/testsite/view3.php">VIEW RECORDS</a><br>
<a href="http://localhost/cms/testsite/del3.php">DELETE RECORDS</a><br>
<a href="http://localhost/cms/testsite/ins3.html">INSERT RECORDS</a>
</body>
</html>
