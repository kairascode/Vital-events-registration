<?php include("header.php");?>
<html>
<head>
<link a href="admintasks.css" type="text/css" rel="stylesheet">
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
</head>
<p align="left"><a href="adminprof.php">HOME</a>
<a href="logoff.php">LOG OUT</a></p>
<body>
<form method="POST" action="deleteuser2.php">
<strong>
<p align="center">DELETE USER</P><br><hr>
Type of user
<select type="text" name="user" required width="8">
<option value=""></option value>
<option value="staff">Staff</option value>
<option value="agent">Agent</option value></select><br><br><hr>
User name:<input type="text" name="username" maxlength="30" required><br><br><hr>
User code:<input type="text" name="usercode" maxlength="4" required><br><br><hr>
<p align="right"><input type="submit" name="submit" value="Delete user"></p>
</strong>
</form>
<?php include("footer.php");?>