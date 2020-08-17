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
<?php
$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
mysql_select_db("pomis") or die ("Couldn't find Database");
$query=mysql_query("select*from staff");

echo"<table border=1 cellpadding=1 align='center'>";
echo"<th style=bold colspan=6>MY STAFF</th>";
echo"<tr><td>STAFF NAME<td>STAFF No</td><td>E-MAIL ADDRESS</td><TD>TIME REGISTERED</td><td>STATUS</TD></tr>";


while ($myrow = mysql_fetch_array($query))
{
echo "<TR><TD>".$myrow["username"]." <td>".$myrow["staff_no"]."<td>".$myrow["email"]."<TD>".$myrow["timeSys"]."<td>".$myrow["status"]."</tr>";

}
echo "</TABLE>";
mysql_close($conn);
?>
