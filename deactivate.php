			
<html>
<head>
<?php include("header.php");?>
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:admin.php");
exit;
}
else
echo"<p align='right'><h3><font color='orange'>Welcome, $username</h4></font></p>";

?>
<link a href="admintasks.css" type="text/css" rel="stylesheet">
</head>
<p align="left"><a href="adminprof.php">HOME</a>
<a href="logoff.php">LOG OUT</a></p>
<body>
<form method="POST" action="deactivate2.php">
<strong>
<p align="center">DEACTIVATE USER</P><br><hr>
User type:<select type="text" name="users" maxlength="5" REQUIRED>
<option value=""></option>
<option value="agent">AGENT</option>
<option value="staff">STAFF</option></select><br><br><hr>
User name:<input type="text" name="username" maxlength="30" required><br><br><hr>
User code:<input type="text" name="usercode" maxlength="4" required><br><br><hr>
<p align="right"><input type="submit" name="submit" value="Deactivate"></p>
</strong>
</form>
<?php include("footer.php");?>
