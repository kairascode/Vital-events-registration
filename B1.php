<?php include("header.php");?>
<html>
<head>
<title>Form B1</title>
<link rel="stylesheet" type="text/css" a href="form.css" media="screen">
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:login.php");
exit;
}
else
echo"<p align='right'><font color=blue><b>Welcome, $username</b></p></font>";
?>
</head>
<body>
<p align="right"><a href="profile.php">HOME</a><a href="logoff.php">LOG OUT</a></p>
<div id="form1">
<form action="insert.php" method="post">
<div id="b1">
<p align="right">VERS/BF</P><P align="center">BIRTH REGISTRATION FORM</p></div><hr><Br>
<P ALIGN="RIGHT">BIRTH NOTIFICATION No:<input type="text" name="note" maxlength="7" required ></P><br><hr>
CHILD'S NAME:<input type="text" name="name" maxlength ="30" required  >
DOB:<input type="date" maxlength="20" name="dob" required>
SEX
<select name="sex" required>
<option value=""></option>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option></SELECT><br><br><hr>
MOTHER:<input type="text" maxlength ="30" name="mother" required>
AGE:<input type="text" name="age" maxlength="3" required><br><br>
ID CARD No:<input type="integer" name="card" maxlength="8" required><br><br>
MARITAL STATUS<select name="ms"required>
<option value=""></option>
<option value="single">SINGLE MOTHER</option>
<option value="married">MARRIED</option></SELECT>
CURRENT RESIDENCE<input type="text" name="rs" maxlength="20"required><hr><br>
FATHER:<input type="text" maxlength ="30" name="father"required>
AGE:<input type="text" name="agee" maxlength="3"required ><br><br>
ID CARD No:<input type="integer" name="cardd" maxlength="8"required><hr>
PLACEOFBIRTH:<input type="text" name="pob" maxlength="20"required>
COUNTY:<select name="county"required>
<option value="">-----</option>
<option value="mombasa">MOMBASA</option>
<option value="lamu">LAMU</option>
<option value="kwale">KWALE</option>
<option value="kilifi">KILIFI</option>
<option value="taita">TAITA TAVETA</option>
<option value="makueni">MAKUENI</option>
<option value="kajiado">KAJIADO</option>
<option value="machakos">MACHAKOS</option>
<option value="nairobi">NAIROBI</option>
<option value="kiambu">KIAMBU</option>
<option value="nyeri">NYERI</option>
<option value="muranga">MURANG'A</option>
<option value="embu">EMBU</option>
<option value="kirinyaga">KIRINYAGA</option>
<option value="meru">MERU</option>
<option value="tharaka">THARAKA NITHI</option>
<option value="isiolo">ISIOLO</option>
<option value="garrisa">GARRISA</option>
<option value="marsabit">MARSABIT</option>
<option value="wajir">WAJIR</option>
<option value="mandera">MANDERA</option>
<option value="nakuru">NAKURU</option>
<option value="kericho">KERICHO</option>
<option value="nyandarua">NYANDARUA</option>
<option value="laikipia">LAIKIPIA</option>
<option value="uasin">UASIN GISHU</option>
<option value="kisii">KISII</option>
<option value="naymira">NYAMIRA</option>
<option value="homabay">HOMABAY</option>
<option value="kisumu">KISUMU</option>
<option value="baringo">BARINGO</option>
<option value="turkana">TURKANA</option>
<option value="samburu">SAMBURU</option></SELECT><BR><BR>
TYPE OF BIRTH:
<select name="tyb" required>
<option value="SINGLE">SINGLE</option>
<option value="TWIN">TWIN</option>
<option value="STILL(born dead)">STILL(born dead)</OPTION></select>
INFORMANT:<input type="text" name="informant"required><br><br>
DESCRITION OF INFORMANT:
<select name="tinfo" required>
<option value="DOCTOR">DOCTOR</option>
<option value="PARENT">PARENT</option>
<option value="GRANDPARENT">GRANDPARENT</OPTION>
<option value="OTHER">OTHER</option></select><br><br><hr>
DATE OF REG:<input type="Date" maxlength ="10" name=" dor" required>
AGENT NO:<input type="text" name="agentno" maxlength="4"required>
<hr>
<p align="center"> Please ensure that you have read through the details before registering. Thank you !</p>
<p align="center"><input type="submit" name="submit" value="REGISTER" onsubmit="view()"></p>
</form>
</div>
</body>
<?php include("footer.php");?>
</html>
