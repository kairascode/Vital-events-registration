<?php include("header.php");?>
<a href="adminreg.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a><br>
<?php
if (isset($_POST['users'])) { $users = $_POST['users']; }
if (isset($_POST['username'])) { $username = $_POST['username']; }
if (isset($_POST['svisor'])) { $supervisor = $_POST['svisor']; }
if (isset($_POST['usercode'])) { $usercode = $_POST['usercode']; } 
if (isset($_POST['pass'])) { $pass = $_POST['pass']; } 
if (isset($_POST['email'])) { $email = $_POST['email']; } 

	$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
                  mysql_select_db("pomis") or die ("Couldn't find Database");
				  if($users=="staff"){
				  $qry=mysql_query("INSERT INTO staff (username,staff_no,password,email,status) 
            	VALUES('$username','$usercode','$pass','$email','')") or die(mysql_error());
				
            echo "<p>$username has been registered as a staff member</p>";}
			
			else{
			$users=="agent";
			{
			$qry=mysql_query("INSERT INTO agents(username,usercode,password,email,status,Staff_no) 
            	VALUES('$username','$usercode','$pass','$email','','$supervisor')") or die(mysql_error());
            echo "<p>$username has been registered as a Registration agent </p>";
			
			}
			}
?>