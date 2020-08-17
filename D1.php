<?php include("header.php");?>
<html>
<head>
<title>Form D1</title>
<link rel="stylesheet" type="text/css" a href="formD.css" media="screen">
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
<h4><P align="right"><a href="profile.php">HOME</a><a href="logoff.php">LOG OUT</a></h4></p>
<div id="form2">
<form method="post" action="dinsert.php">
<p align="right">VERS/DF</p><p align="center">DEATH REGISTRATION FORM</P><hr><br>

<p align="right">BURIAL PERMIT No:<input type="text" name="permit" maxlength="7" required></p><br><hr>
DECEASED(NAME):<input type="text" name="deceased" maxlength="30"required>&nbsp
DOD:<input type="date" name="dod" maxlength="20"required><br><br>
AGE(Years):<input type="integer" name="age" maxlength="3"required>
ID Card No:<input type="integer" name="card" maxlength="8"required><br><br>
OCCUPATION:<input type="text" name="occ" maxlength="20"required>
SEX:<select name="sex"required>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option></SELECT><hr><BR>
HOME COUNTY:<select name="county"required>
<option value=""></option>
<option value="mombasa">MOMBASA</option>
<option value="lamu">LAMU</option>
<option value="kwale">KWALE</option>
<option value="kilifi">KILIFI</option>
<option value="taita">TAITA TAVETA</option>
<option value="makueni">MAKUENI</option>
<option value="kajiado">KAJIADO</option>
<option value="machakos">MACHAKOS</option>
<option value="nairobi">NAIROBI</option>
<option value="nakuru">KIAMBU</option>
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
<option value="uasingishu">UASIN GISHU</option>
<option value="kisii">KISII</option>
<option value="nyamira">NYAMIRA</option>
<option value="homabay">HOMABAY</option>
<option value="kisumu">KISUMU</option>
<option value="baringo">BARINGO</option>
<option value="turkana">TURKANA</option>
<option value="samburu">SAMBURU</option></SELECT><BR><BR>
 DEATH CAUSE
<select name="dcause"required>
<option value=""></OPTION>
<option value="Roadaccident">ROAD ACCIDENT</OPTION>
<option value="cancer">CANCER</option>
<option value="AIDS">AIDS</option>
<option value="MALARIA">MALARIA</option>
<option value="PNEUMONIA">PNEUMONIA</option>
<option value="SUDDEN DEATH">SUDDEN DEATH</option>
<option value="SNAKE BITE">SNAKE BITE</option>
<option value="CARDIOPULMONARY ARREST">CARDIOPULMONARY ARREST</option>
<option value="CHILD DELIVERY">CHILD DELIVERY</option>
<option value="MURDER">MURDER</option>
<option value="POISONING">POISONING</option>
<option value="SUICIDE">SUICIDE</option>
<option value="MENINGITIS">MENINGITIS</option>
<option value="DROWNING">DROWNING</option>
<option value="OLD AGE">OLD AGE</option></SELECT>
PLACE OF DEATH:<input type="text" maxlength="20" name="pod"required><BR><HR>
INFORMANT:<input type="text" maxlength="20" name="informant"required>
DESCRIPTION:
<select name="tinfo"required>
<option value="tinfo"></option>
<option value="doctor">DOCTOR</optioN>
<option value="POLICE">POLICE</optioN>
<option value="PARENT">PARENT</OPTION>
<option value="WIFE">WIFE</option>
<option value="HUSBAND">HUSBAND</option>
<option value="CHILD">CHILD</option>
<option value="AUNT">AUNT</option>
<option value="UNCLE">UNCLE</option>
<option value="GRANDPARENT">GRANDPARENT</option></SELECT>
<P>If Informant is Police,quote OB No.</p>
<input type="text" name="obno" maxlength="20"required>
<p align="right">DATE OF REG:<input type="date" name="dor"></p>
AGENT CODE:<input type="text" name="agentno" maxlength="4"required><br><br><hr>
<p align="center"> Please ensure that you have read through the details before registering. Thank you !</p>
<p align="center"><input type="submit" name="submit" value="REGISTER"></p></div>
</form>
<?php include("footer.php");?>


