<html>
<head>
<?php include("header.php");?>
<P ALIGN="RIGHT"><a href="adminprof.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a></P><br><BR>
</head>
<body>
<table border="1" align="center">
<th colspan="1">WRITE MESSAGE HERE</TH>
<tr><td>
<form method="post" action="adminnotice2.php">
<input type="hidden" name="SysAdmin" value="SysAdmin" size="20"><BR><BR>
TO:<input type="text" name="user" required size="20" placeholder="usercode"><BR><BR>
MESSAGE<BR>
<textarea name="mess" cols="50" rows="10" wrap="soft"></textarea><br>
<input type="submit" name="submit" value="POST">
<input type="reset" value="CANCEL"/>
</form></td><tr></table>
</html>
<?php include("footer.php");?>