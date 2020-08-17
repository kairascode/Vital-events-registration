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
echo"<p align='right'><h3><font color='orange'>Welcome, $username</h4></font></p><hr>";
?>
</head>
<a href="registrar.php">HOME</a>
<a href="logoff.php">LOG OUT</a><hr>
<body>
<H3><U><B>GUIDELINES TO SEARCH & PRINT OF CERTIFICATES</U></B></H3>
<h4><b><font color="GREEN">

USE THE BIRTH NOTIFICATION NO OR BURIAL PERMIT NO TO SEARCH RECORDS TO PRINT<BR><bR><BR>
BIRTH CERTIFICATE
<form method="post" action="process.php?go" id="search form">
<input type="text" name="search" placeholder="Notification no required" maxlength="7" required>
<input type="submit" name="submit" value="SEARCH RECORD">
</form>
DEATH CERTIFICATE
<form method="post" action="process2.php?go" id="search form">
<input type="text" name="search" placeholder="Burial Permit no required" maxlength="7" required>
<input type="submit" name="submit" value="SEARCH RECORD">
</form>
</h4></font>
</BODY></b>
</HTML>
<?php include("footer.php");?>