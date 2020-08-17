<html>
<head><?php include("header.php");?>
<link rel="stylesheet" type="text/css" a href="ammendforms.css" media="screen">
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:login.php");
exit;
}
else
echo"<p align='right'><h3><font color='orange'>Welcome, $username</h4></font></p>";
?>
</head>
<body>
<p align="right"><a href="profile.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a>
<p><b><h3>SELECT TYPE OF RECORDS THAT YOU WISH TO AMMEND</p></b></h3><hr>
<div><strong>
<form method="POST" action="">
TYPE
<select name="type" type="text">
<option value="none">SELECT</option>
<option value="birth">BIRTHS</option>
<option value="death">DEATH</option>
</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
RECORD NUMBER:<input type="text" name="number"  maxlength="4" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<!--MONTH:<input type="text" name="month" maxlength="4" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
<input type="submit" name="submit" value="View" onclick="view"></strong>
</form>
</div ><hr>
<div id="view">

<?php
if(isset($_POST['submit']))
if (isset($_POST['type'])) { $type = $_POST['type']; }
if (isset($_POST['number'])) { $number = $_POST['number']; } 
	$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
                  mysql_select_db("pomis") or die ("Couldn't find Database");
				
				  if($type=="death"){
				  	$select = "SELECT * FROM dreg where no=$number and status='rejected'";
					$qry=mysql_query($select);
					$row=mysql_fetch_array($qry);
					$status=$row['status'];$recnum=$row['no'];$permit=$row['permit_no'];$dname=$row['dname'];$dod=$row['dod'];
					$pod=$row['pod'];$informant=$row['informant'];$county=$row['county'];$dor=$row['dor'];$dcause=$row['dcause'];
					$occ=$row['occupation'];$age=$row['age'];$tinfo=$row['tinfo'];$agentno=$row['agentno'];$obno=$row['obno'];
					$idno=$row['id_no'];$sex=$row['sex'];
					
					?>
					<form method='post' action='dammend.php'>
<p align='right'>VERS/DF</p><p align='center'>DEATH REGISTRATION FORM</P><hr><br>
<p align='right'>BURIAL PERMIT No:<input type='text' name='permit' maxlength='7' value='<?php echo"$permit";?>'></p><br><hr>
RECORD NUMBER:<input type='text' name='no' maxlength='3'value='<?php echo"$recnum";?>'>
DECEASED(NAME):<input type='text' name='deceased' maxlength='30'value='<?php echo"$dname";?>'>&nbsp
<br><br>
DOD:<input type='date' name='dod' maxlength='20' value='<?php echo"$dod";?>'><br><br>
AGE(Years):<input type='integer' name='age' maxlength='3' value='<?php echo"$age";?>'>
ID Card No:<input type='integer' name='card' maxlength='8' value='<?php echo"$idno";?>'><br><br>
OCCUPATION:<input type='text' name='occ' maxlength='20' value='<?php echo"$occ";?>'>
SEX:<select name='sex'>
<option value=""><?php echo"$sex";?></option>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option></SELECT><hr><BR>
HOME COUNTY:<select name="county" >
<option value=""><?php echo"$county";?></option>
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
<select name="dcause" >
<option value=""><?php echo"$dcause";?></OPTION>
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
PLACE OF DEATH:<input type="text" maxlength="20" name="pod" value="<?php echo"$pod";?>"><BR><HR>
INFORMANT:<input type="text" maxlength="20" name="informant" value="<?php echo"$informant";?>">
DESCRIPTION:
<select name="tinfo" >
<option value=""><?php echo"$tinfo";?></option>
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
<input type="text" name="obno" maxlength="20" value="<?php echo"$obno";?>">
<p align="right">DATE OF REG:<input type="date" name="dor" value="<?php echo"$dor";?>"></p>
AGENT CODE:<input type="text" name="agentno" maxlength="4" value="<?php echo"$agentno";?>"><br><br><hr>

<p align="center"><input type="submit" name="submit" value="AMMEND">&nbsp&nbsp<input type="submit" name="delete" value="DELETE"></p></div>
</form>
<?php

					}
					else
					if($type=="birth"){
					$select = "SELECT * FROM breg where no=$number and status='rejected'" ;
					$qry=mysql_query($select);
					$rec=mysql_fetch_array($qry);
					$no=$rec['no'];$note=$rec['notification_no'];$child=$rec['childname'];$dob=$rec['dob'];$pob=$rec['pob'];$sex=$rec['sex'];$mother=$rec['mother'];$Mage=$rec['age'];$Mid=$rec['id_no'];
					$mstatus=$rec['m_status'];$residence=$rec['residence'];$father=$rec['father'];$Fage=$rec['age2'];$Fid=$rec['id_no2'];$dreg=$rec['dreg'];$informant=$rec['informant'];$tinfo=$rec['tinfo'];$tyb=$rec['tyb'];
					$agentno=$rec['agentno'];$county=$rec['county'];$status=$rec['status'];
                       
				?>
				<!--end of death form start of birth form-->
				<form action='bammend.php' method='post'>
<div id='b1'>
<p align='right'>VERS/BF</P><P align='center'>BIRTH REGISTRATION FORM</p></div><hr><Br>
RECORD No:<input type='text' maxlength='4' name='rnumber' required value='<?php echo"$no";?>'>
<P ALIGN='RIGHT'>BIRTH NOTIFICATION No:<input type='text' name='note' maxlength='7' required value='<?php echo"$note";?>'></P><br><hr>
CHILD'S NAME:<input type='text' name='name' maxlength ='30' required value='<?php echo"$child";?>' >
DOB:<input type='date' maxlength='20' name='dob' required value='<?php echo"$dob";?>'>
SEX
<select name='sex' required >
<option value=""><?php echo"$sex";?></option>
<option value='MALE'>MALE</option>
<option value='FEMALE'>FEMALE</option></SELECT><br><br><hr>
MOTHER:<input type='text' maxlength ='30' name='mother' required value='<?php echo"$mother";?>'>
AGE:<input type='text' name='age' maxlength='3' required value='<?php echo"$Mage";?>'><br><br>
ID CARD No:<input type='integer' name='card' maxlength='8' required value='<?php echo"$Mid";?>'><br><br>
MARITAL STATUS<select name="ms"required >
<option value=""><?php echo"$mstatus";?></option>
<option value="single">SINGLE MOTHER</option>
<option value="married">MARRIED</option></SELECT>
CURRENT RESIDENCE<input type="text" name="rs" maxlength="20"required value='<?php echo"$residence";?>'><hr><br>
FATHER:<input type="text" maxlength ="30" name="father"required value='<?php echo"$father";?>'>
AGE:<input type="text" name="agee" maxlength="3"required value='<?php echo"$Fage";?>'><br><br>
ID CARD No:<input type="integer" name="cardd" maxlength="8"required value='<?php echo"$Fid";?>'><hr>
PLACEOFBIRTH:<input type="text" name="pob" maxlength="20"required value='<?php echo"$pob";?>'>
COUNTY:<select name="county"required >
<option value=""><?php echo"$county";?></option>
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
<select name="tyb" required value='<?php echo"$tyb";?>'>
<option value="SINGLE">SINGLE</option>
<option value="TWIN">TWIN</option>
<option value="STILL(born dead)">STILL(born dead)</OPTION></select>
INFORMANT:<input type="text" name="informant"required value='<?php echo"$informant";?>'><br><br>
DESCRITION OF INFORMANT:
<select name="tinfo" required value='<?php echo"$tinfo";?>'>
<option value="DOCTOR">DOCTOR</option>
<option value="PARENT">PARENT</option>
<option value="GRANDPARENT">GRANDPARENT</OPTION>
<option value="OTHER">OTHER</option></select><br><br><hr>
DATE OF REG:<input type="Date" maxlength ="10" name=" dor" required value='<?php echo"$dor";?>'>
AGENT NO:<input type="text" name="agentno" maxlength="4"required value='<?php echo"$agentno";?>'>
<hr>
<p align='center'><input type='submit' name='submit' value='AMMEND'></p>
</form>
<?php
}
?>
</div>				

<script type="text/javascript">
function view(){
document.getElementById("view");
}
</script>
</body>
<?php include ("footer.php");?>
</html>