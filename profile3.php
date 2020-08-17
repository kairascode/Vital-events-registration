<?php include("header.php");?>
<link rel="stylesheet" type="text/css" a href="admin.css" media="screen">
<p align="right"><a href="index.php">LOG OUT</a></p>
<p align="center"><b><u>SYSTEM USERS REGISTRATION</b></u></p>
<p align="center"><li><a href="viewA.php">VIEW REGISTRATION AGENTS</li><li><a href="viewS.php">VIEW CIVIL REGISTRATION STAFF</a></li></p>
<!--<div id="agents">
--<P align="center" style="bold"> REGISTRATION AGENTS</p><HR>
<form id="1" method="post" action="insert3.php">
USER NAME:<input type="text" name="username" maxlength="20" ><br><hr>
USER CODE:<input type="text" name="usercode" maxlength="4" ><br><hr>
PASSWORD:<input type="text" name="password" maxlength="6" ><br><hr>
<p align="center"><input type="submit" name="submit" value=" REGISTER AGENT"></p></form><hr>
</div><br>-->
<div id="staff">
<P align="center" style="bold" > REGISTRATION PORTAL</p><hr>
<form id="2" method="post" action="insert4.php">
USER NAME:<input type="text" name="username" maxlength="20" ><br><hr>
USER TYPE:<Select name="user" required>
<option value=""></option>
<option value="staff">REGISTRY STAFF</option>
<option value="agents">REGISTRATION AGENT</OPTION></SELECT><hr>
USER CODE:<input type="text" name="usercode" maxlength="4" ><br><hr>
PASSWORD:<input type="text" name="password" maxlength="6" ><br><hr></form>
<form method="upload.php" enctype="multipart/form-data" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="51200"/>
<p><strong>USER PHOTO</strong><br>
<input type="file" name="photo"></p>
<p align="center"><input type="submit" name="submit" value=" REGISTER "></P></form><hr>

</div>

<?php include("footer.php");?>

