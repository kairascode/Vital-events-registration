<html>
<head>
<?php include("header.php");?>
<a href="adminprof.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a><br>
<?php
if(isset($_POST["submit"]))
if (isset($_POST['SysAdmin'])) { $admin = $_POST['SysAdmin']; }
if (isset($_POST['mess'])) { $message = $_POST['mess']; }
if (isset($_POST['user'])) { $user = $_POST['user']; }

mysql_connect("localhost", "root", "") or die("We couldn't connect!");
            mysql_select_db("pomis");
			mysql_query("INSERT INTO message(owner,user,messages,status)VALUES('$admin','$user','$message','')")or die(mysql_error());
			echo"Message sent";
			echo"<table border=1 align='center'";
			
			
?>