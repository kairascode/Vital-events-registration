<html
<head><?php include("header.php");?>
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
</head>
<body>
<p align="right"><a href="approve.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a></p><br>
<?php
if(isset($_POST['submit']))
if (isset($_POST['number'])) { $record = $_POST['number']; }
$conn=mysql_connect("localhost","root","")or die("COULD NOT CONNECT...");
mysql_select_db("pomis",$conn);
mysql_query("UPDATE breg set status='rejected' where no='$record'");
$qry=mysql_query("select agentno from breg where no='$record'");
$row=mysql_fetch_array($qry);
$user=$row['agentno'];
//$user=$qry;
$rejectMess="Birth record number $record that you have filed is incomplete, please ammend";
mysql_query("INSERT into message(owner,user,messages)VALUES('$username','$user','$rejectMess')");
echo"Rejection confirmed to $user";
?>
</body>
</html>