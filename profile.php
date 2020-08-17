<html>
<header>
<?php include("header.php");?>
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:login.php");
exit;
}
else
$username=$_SESSION['username'];
echo"<p align='right'><font color=blue><b>Welcome, $username</b></p></font>";
?></head>
<body>
<table border="1" colspan="1" align="center" cellspacing="4">

<tr>
<td width="150">
<ul><li><hr>
<a href="agentmessage.php">Messages</a><br><li><hr>
<a href="corrections.php">Ammendments</a><br><li><hr>
<a href="B1.php">Register Birth event</a><br><li><hr>
<a href="D1.php">Register Death event<br></a><li><hr>
<a href="logoff.php">Logout<br></a><hr>
</li></ul>

</td>
<td>
<img src="images/bp19.jpg" width=600 height=300>
	</td>
	<td width="180">
	Registration as per cap 149 Laws of Kenya
	</td></tr></table>
	</body>
	</html>
<?php include("footer.php");?>
