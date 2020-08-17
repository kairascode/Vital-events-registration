<?php
session_start('username');
$username=$_POST['username'];
$password=$_POST['password'];
$usercode=$_POST['usercode'];
if($username && $password&&$usercode)
{
$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
mysql_select_db("pomis") or die ("Couldn't find Database");
$query=mysql_query("select*from admin WHERE username='$username'");
$numrows=mysql_num_rows($query);

if ($numrows!==0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername=$row['username'];
$dbpassword=$row['password'];
$dbusercode=$row['usercode'];
}
if($username==$dbusername&& ($password)==$dbpassword && ($usercode)==$dbusercode)
{
header('location:adminprof.php');
$_SESSION['loggedin']=TRUE;
 $_SESSION['username']="$username" ;

}

else
echo"Your password is incorrect!";

}
else
die("That user doesn't exist!");
}
else

die("Please enter a username and password!");

?>
