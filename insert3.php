<?include("header.php");?>
<ul>
<li><a href="profile3.php">NEXT</li><li><a href="profile3.php">BACK</a></li></ul>
<?php
if(isset($_POST['submit']))
if (isset($_POST['username'])) { $username = $_POST['username']; }
if (isset($_POST['usercode'])) { $usercode = $_POST['usercode']; } 
if (isset($_POST['password'])) { $password = $_POST['password']; } 
$formerrors = false;

	if ($username === '') :
		$err_myname = '<p>Sorry, your name is a required field</p>';
		$formerrors = true;
	endif; // input field empty
	if (!($formerrors)) :
		 mysql_connect("localhost", "root", "") or die("We couldn't connect!");
            mysql_select_db("pomis");
            mysql_query("INSERT INTO agents (username,usercode,password) 
            	VALUES('$username','$usercode','$password')") or die(mysql_error());
            echo "<p>The Agent is now registered</p>";
			

            endif; 
?>
