<html>
<head>
<title>VERS</TITLE>
<link rel="stylesheet" type="text/css" a href="pmis.css" media="screen">
<link rel="stylesheet" type="text/css" a href="style.css" media="screen">
<link rel="stylesheet" type="text/css" a href="login.css" media="screen">
</head>
<body>
<div id="mwili">
<p align="center"><h1>VITAL EVENTS REGISTRATION SYSTEM - VERS<br><I>Getting everyone in the picture</i></h1></p><hr>
<div id="ingia">
<p align="right" font color="green">&nbsp<?php

								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
								</p></div>


<p align="center"><form method="post" action="load3.php"></p>
<P align="right">VERS</P><P align="center"> ADMIN LOGIN PORTAL</p><hr>
USER NAME:<input type="text" name="username" maxlength="20" required><br><hr>
PASSWORD:<input type="password" name="password" maxlength="10" required><br><hr>
USER CODE:<input type="password" name="usercode" maxlength="10" required><br><br><hr>
<p align="right"><input type="submit" name="submit" value="LOG IN"></p></form>
</BODY>
</html>
<?php include("footer.php");?>