<?PHP include("header.php");?>
<?php
if(isset($_POST['submit']))
if (isset($_POST['note'])) { $note = $_POST['note']; }
if (isset($_POST['name'])) { $name = $_POST['name']; } //else { $name = ''; }
if (isset($_POST['dob'])) { $dob = $_POST['dob']; } //else { $dob = ''; }
if (isset($_POST['pob'])) { $pob = $_POST['pob']; } //else { $pob = ''; }
if (isset($_POST['county'])) { $county = $_POST['county']; } //else { $county = ''; }
if (isset($_POST['sex'])) { $sex = $_POST['sex']; } //else { $sex = ''; }
if (isset($_POST['mother'])) { $mother = $_POST['mother']; } //else { $mother = ''; }
if (isset($_POST['age'])) { $age = $_POST['age']; } //else { $age = ''; }
if (isset($_POST['ms'])) { $ms = $_POST['ms']; }
if (isset($_POST['card'])) { $card = $_POST['card']; }
if (isset($_POST['rs'])) { $rs = $_POST['rs']; }
if (isset($_POST['father'])) { $father = $_POST['father']; } //else { $father = ''; }
if (isset($_POST['agee'])) { $agee = $_POST['agee']; }
if (isset($_POST['cardd'])) { $cardd = $_POST['cardd']; }
if (isset($_POST['dor'])) { $dor = $_POST['dor']; } //else { $dor = ''; }
if (isset($_POST['informant'])) { $informant = $_POST['informant']; } ///else { $informant = ''; }
if (isset($_POST['tinfo'])) { $tinfo = $_POST['tinfo']; } //else { $tinfo = ''; }
if (isset($_POST['tyb'])) { $tyb = $_POST['tyb']; }
if (isset($_POST['agentno'])) { $agntno = $_POST['agentno']; } //else { $agentno = ''; }


$formerrors = false;

	if ($note === '') :
		$err_myname = '<p>Sorry, your name is a required field</p>';
		$formerrors = true;
	endif; // input field empty
	if (!($formerrors)) :
		 mysql_connect("localhost", "root", "") or die("We couldn't connect!");
            mysql_select_db("pomis");
			
            mysql_query("INSERT INTO breg (notification_no,childname,dob,pob,county,sex,mother,age,m_status,id_no,residence,father,age2,id_no2,dreg,informant,tinfo,tyb,agentno,status) 
            	VALUES('$note','$name','$dob','$pob','$county','$sex','$mother','$age','$ms','$card','$rs','$father','$agee','$cardd','$dor','$informant','$tinfo','$tyb','$agntno','')") or die(mysql_error());
             echo "<html><head><title>REGISTRATION DETAILS</title></head>";
			echo"<body width=400 height=500 font color='blue'>";
			echo"<table border='1' cellspacing='2'>";
			
			echo"
			<th colspan='5' background='blue'>$name Registered details</th>
			<tr><td>Notification no:$note<td>Date of birth:$dob<td>County of birth:$county<td>Type of birth:$tyb</tr>
			<tr><td>Sex:$sex<td>Mother:$mother<td>ID card no:$card<td>Residence:$rs</tr>
			<tr><td>Father:$father<td>Age:$agee<td>ID card no:$cardd<td>Informant is $informant who is a $tinfo</tr>
			<tr><td>Agent no:$agentno</tr>
			<tr><td>Date registered:$dor</tr>
			</table>";
			echo"</html>";

			

            endif; 


?>
<ul>
<li><a href="B1.php">NEXT</li><li><a href="profile.php">HOME</A></li></ul>
<?php include("footer.php"); ?>



