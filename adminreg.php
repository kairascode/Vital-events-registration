
<html>
<head>
<?php include("header.php");?>
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:login.php");
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
<form method="POST" action="adminreg2.php">
<p align="center">USER REGISTRATION</P><hr>
<strong>User type:<select type="text" name="users" maxlength="5" REQUIRED>
<option value=""></option>
<option value="agent">AGENT</option>
<option value="staff">STAFF</option></select><br><br><hr>
Username:<input type="text" name="username" maxlength="30" size="25" required><br><br><hr>
Usercode:<input type="text" name="usercode" maxlength="4"  size="25" required><br><br><hr>
Password:<input type="text" name="pass" maxlength="6"  size="25" required><br><br><hr>
E-mail:<input type="email" name="email"  size="25" required><br><br><hr>
Supervisor:<input type="text" name="svisor" maxlength="30" size="25" required>
<p align="right"><input type="submit" name="submit" value="REGISTER USER"></p></strong>

</form>
<?php include("footer.php");?>
</body>
</html>
