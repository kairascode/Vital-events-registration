<html>
<head>
<title>admin_profile</title>
<?php include("header.php");?>
<link rel="stylesheet" type="text/css" a href="admin.css" media="screen">
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:admin.php");
exit;
}
else
echo"<p align='right'><h3><font color='orange'>Welcome SysAdmin $username</h4></font></p>";

?>
</head>
<body>
<table border="2" cellspacing="2" cellpadding="2">
<tr><td>
<ul><li><a href="#">View Users<li><a href="mystaff.php">Staff</a><a href="agents.php">Agents</a><br><hr>
<li><a href="adminreg.php" onclick="view">Register Users</a><br><hr>
<li><a href="deactivate.php">Deactivate Users</a><br><hr>
<li><a href="activate.php">Activate Users</a><br><hr>
<li><a href="deleteuser.php">Delete Users</a><br><hr>
<li><a href="adminnotice.php">Messages</a><br><hr>
<li><a href='logoff.php'>Log out</a><br><hr></td>
<td id="view" width=600><img src="clock.png">


</td>
<td width=200>Registration as per cap 149 Laws of Kenya</td></tr>
</table>
</body>
<script type="text/javascript">
function view(){
document.getElementById("view");
}
</script>
<?php include("footer.php");?>
</html>