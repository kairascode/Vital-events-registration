<?php

session_start('username');
$username=$_POST['username'];
$password=$_POST['password'];
$usercode=$_POST['usercode'];
if($username && $password&&$usercode)
{
$conn=mysql_connect("localhost","root","3445")or die("Couldn't connect...!");
mysql_select_db("pomis") or die ("Couldn't find Database");
$query=mysql_query("select*from staff WHERE username='$username'");
$numrows=mysql_num_rows($query);

if ($numrows!==0)
{
while($row=mysql_fetch_assoc($query))
{

$dbusername=$row['username'];
$dbpassword=$row['password'];
$dbusercode=$row['staff_no'];
$dbstatus=$row['status'];
}
if($username==$dbusername&& $password==$dbpassword && $usercode==$dbusercode&&$dbstatus=="activated")
{
header('location:registrar.php');
$_SESSION['loggedin']=true;
 $_SESSION['username']=$username;

}
else
if($password!==$dbpassword){
echo"<html>";
echo"<title>LOGIN_ERROR></title>";
echo"<header><h1><font color=red>Your password is incorrect!</head></h1></font>";
echo"</html>";

}
else
if($username!==$dbusername){
echo"That user doesn't exist!";
}
else
if($username!==$dbusername &&$password!==$dbpassword && $usercode==$dbusercode){
echo"WRONG CREDENTIALS!";}
else
if($dbstatus=="deactivated")
{
echo"<html><head><title>ERROR</title></head><body><h2><font color='red'>$username,you are currently deactivated please Contact the Sys Admin for activation</h2></font>
</body></html>";
}
}
}

?>
