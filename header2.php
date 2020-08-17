<?session_start();
$username=$_post['username'];
$usercode=$_post['usercode'];
$password=$_post['password'];

 if(isset($_SESSION['username']))
 {

 echo "you are logged in!";
 @ $_session['username']$username;
 }
 else
 echo "Please login in using the correct credentials...!!";}
 
 
 ?>
<html>
<head>
<title>PMIS</TITLE>
<link rel="stylesheet" type="text/css" a href="pmis.css" media="screen">
<link rel="stylesheet" type="text/css" a href="style.css" media="screen">
<?

 ?>

</head>
<body>


<div id="mwili">
<p align="center"><h1>POPULATION MANAGEMENT INFORMATION SYSTEM(P0MIS)</h1></p><hr>
<div id="ingia">
<p align="right" font color="green">&nbsp<?php

								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
								</p></div>