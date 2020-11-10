<html>
   
   <head>
      <title>Delete a LOGIN DETAILS from MySQL Database</title>
   </head>
   
   <body bgcolor="red">
      <?php
         if(isset($_POST['delete'])) {
            $server = 'localhost';
            $user = 'ROOT';
            $password = '01november2000';
			$dbname='cms';
            $conn = mysqli_connect($server, $user, $password,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $ID = $_POST['ID'];
            
            $sql = "DELETE FROM fsalary WHERE ID = $ID" ;
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error($retval));
            }
            
            echo "Deleted data successfully\n";
            
            mysqli_close($conn);
         }else {
            ?>
               <CENTER><H1>DELETE DATA OF FACULTY SALARY</H1></CENTER>
			   <form method = "post" action = "<?php $_PHP_SELF ?>">
			   <center>
                  <table width = "400" border = "4"
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100">ID</td>
                        <td COLSPAN='2'><input name = "ID" type = "text" 
                           id = "ID"></td>
                     </tr>
                     <tr>
                        <td width = "100"> </td>
                        <td COLSPAN='2'>
                           <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
                        </td>
                     </tr>
<tr><td><a href="http://localhost/cms/testsite/view3.php">VIEW RECORDS</a></td><td>
<a href="http://localhost/cms/testsite/edit3.php">EDIT RECORDS</a></td> <td>
<a href="http://localhost/cms/testsite/ins3.html">INSERT RECORDS</a></td></tr>
                  </table>
				  </center>
               </form>
            <?php
         }
      ?>
	  <br>  
   </body>
</html>
