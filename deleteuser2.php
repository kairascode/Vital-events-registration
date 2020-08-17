<?php include("header.php");?>
<a href="adminreg.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a><br>
<?php
if (isset($_POST['users'])) { $users = $_POST['users']; }
if (isset($_POST['username'])) { $username = $_POST['username']; }
if (isset($_POST['usercode'])) { $usercode = $_POST['usercode']; } 

	$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
                  mysql_select_db("pomis") or die ("Couldn't find Database");
				  
				  if($users=="staff"){
				  $sql=mysql_query("delete from staff where username='$username' and staff_no='$usercode'") or die(mysql_error());
				  echo"<p><h2><font color='red'>User $username has been deleted</h2></font></p>";
				   
            
			}
			else{
			$users=="agent";
			 $sql=mysql_query("delete from agents where username='$username' and usercode='$usercode'") or die(mysql_error());
				  echo"<p><h2><font color='red'>User $username has been deleted</h2></font></p>";
            
			           
			}
			
			
?>
