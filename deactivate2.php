<?php include("header.php");?>
<?php
if (isset($_POST['users'])) { $users = $_POST['users']; }
if (isset($_POST['username'])) { $username = $_POST['username']; }
if (isset($_POST['usercode'])) { $name = $_POST['usercode']; } 

	$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
                  mysql_select_db("pomis") or die ("Couldn't find Database");
				  $d="deactivated";
				  if($users=="staff"){
				  
				  mysql_query("UPDATE staff set status='$d' where username='$username' and staff_no='$usercode'") or die(mysql_error());
            echo "<p>$username has been deactivated</p>";
							
			}
			else{
			$users=="agent";
			 mysql_query("UPDATE agents set status='$d' where username='$username' and usercode='$usercode'") or die(mysql_error());
			 
            echo "<p>$username has been deactivated</p>";
			}
			
?>
<li><a href="deactivate.php">NEXT</li><li><a href="adminprof.php">HOME</li></ul>