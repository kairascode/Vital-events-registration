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


<p align="center"><form method="post" action="load2.php"></p>
<P align="right">VERS</P><P align="center"> STAFF LOGIN PORTAL</p><hr>
USERNAME:<input type="text" name="username" size="20" required ><br><hr>
PASSWORD:<input type="password" name="password" size="20"maxlength="7" required><br><hr>
USER CODE:<input type="password" name="usercode" size="20" maxlength="7" required><br><br><hr>
<p align="right"><input type="submit" name="submit" value="LOG IN"></p>
<p> Are you new to the system? Please contact the Admin [0723169381]</p>
<p>Want to reset Password? Click <a href="resetpass.php"><font color="white"><b>here</a></b></font> to reset</p>
</form>
</BODY>
<?php include("footer.php");?>
</html>
