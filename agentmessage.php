<html>
<head>
<title>myMessage</title>
<?php include("header.php");?>
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:login2.php");
exit;
}
else
$username=$_SESSION['username'];
echo"<p align='right'><h3><font color='orange'>Welcome, $username</h4></font></p>";
?>
</head>
<body>
<p align="right"><a href="profile.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a></p>
<?php
if(isset($_POST["submit"]))
if(isset($_POST['clear'])){$clear=$_POST['clear'];}
$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
mysql_select_db("pomis") or die ("Couldn't find Database");
$query=mysql_query("select*from message where user=(select usercode from agents where username='$username') and status='' order by timeModified desc");
mysql_query("update message set status='read' where messages='$clear'");
echo"<table border=0 align='center' cellspacing='20' bgcolor='gray'>";
echo"<th colspan=4><font color='purple'>INBOX</th></font>";
echo"<tr><td><font color='green'>FROM<td align='center'><font color='green'>MESSAGE<TD align='center'><font color='green'>TIME<td><font color='green'>ACTION</tr></font>";


while ($myrow = mysql_fetch_array($query))
{
$mess=$myrow['messages'];
echo "<tr bgcolor='pink'><td><font color='blue'>".$myrow["owner"]."<td><font color='blue'>".$myrow["messages"]."<td><font color='blue'>".$myrow["timeModified"]."<TD><form method='POST' action=''><input type='hidden' name='clear' value='$mess'><input type='submit' name='submit' value='Mark as read'></form></td></font></tr>";

}
echo"</table>";
mysql_close($conn);	
?>
</body>
<?php include("footer.php");?>
</html>