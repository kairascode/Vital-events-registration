<?php
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
if($username!==$dbusername &&$password!==$dbpassword){
echo"Please enter a username and password!";}
else
if($dbstatus=="deactivated")
{
echo"You are currently deactivated...Contact the Sys Admin";
}
?>