<?php include("header.php");?>
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:login2.php");
exit;
}
else
echo"<p align='right'><h3><font color='orange'>Welcome, $username</h4></font></p>";
?>
<?php
$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
mysql_select_db("pomis") or die ("Couldn't find Database");
$query=mysql_query("select*from agents where Staff_no=(select staff_no from staff where username='$username')");

echo"<table border=1 cellpadding=1 align='center'>";
echo"<th style=bold colspan=6>MY AGENTS</th>";
echo"<tr><TD>AGENT NAME<td>USERCODE<td>E-MAIL ADDRESS</td><TD>TIME REGISTERED</tr>";


while ($myrow = mysql_fetch_array($query))
{
echo "<TR><TD>".$myrow["username"]."<td>".$myrow["usercode"]."<td>".$myrow["email"]."<TD>".$myrow["timeSys"]."</tr>";

}
echo "</TABLE>";
mysql_close($conn);
?>
<?php include("footer.php");?>
