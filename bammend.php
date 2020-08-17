<?PHP include("header.php");?>
<?php
if(isset($_POST['submit']))
if (isset($_POST['note'])) { $note = $_POST['note']; }
if (isset($_POST['name'])) { $name = $_POST['name']; } 
if (isset($_POST['dob'])) { $dob = $_POST['dob']; } 
if (isset($_POST['pob'])) { $pob = $_POST['pob']; } 
if (isset($_POST['county'])) { $county = $_POST['county']; } 
if (isset($_POST['sex'])) { $sex = $_POST['sex']; } 
if (isset($_POST['mother'])) { $mother = $_POST['mother']; } 
if (isset($_POST['age'])) { $age = $_POST['age']; } 
if (isset($_POST['ms'])) { $ms = $_POST['ms']; }
if (isset($_POST['card'])) { $card = $_POST['card']; }
if (isset($_POST['rs'])) { $rs = $_POST['rs']; }
if (isset($_POST['father'])) { $father = $_POST['father']; } 
if (isset($_POST['agee'])) { $agee = $_POST['agee']; }
if (isset($_POST['cardd'])) { $cardd = $_POST['cardd']; }
if (isset($_POST['dor'])) { $dor = $_POST['dor']; } 
if (isset($_POST['informant'])) { $informant = $_POST['informant']; } 
if (isset($_POST['tinfo'])) { $tinfo = $_POST['tinfo']; } 
if (isset($_POST['tyb'])) { $tyb = $_POST['tyb']; }
if (isset($_POST['agentno'])) { $agntno = $_POST['agentno']; } 
if (isset($_POST['rnumber'])) { $no = $_POST['rnumber']; } 

		 mysql_connect("localhost", "root", "") or die("We couldn't connect!");
            mysql_select_db("pomis");
            mysql_query("UPDATE breg set childname='$name',dob='$dob',pob='$pob',sex='$sex',mother='$mother',age='$age',id_no='$card',m_status='$ms',residence='$rs',father='$father',age2='$agee',id_no2='$cardd',dreg='$dor',informant='$informant',tinfo='$tinfo',tyb='$tyb',agentno='$agntno', county='$county',status='' where no='$no'") 
            	 or die(mysql_error());
           /* echo "<html><head><title>REGISTRATION DETAILS</title></head>";
			echo"<body width=400 height=500 font color='blue'>";
			echo"<table border='1' cellspacing='2'>
			<th colspan='5' background='blue'>$name Registered details</th>
			<tr><td>notification_no:$no<td>Child name:$name<td>Date of birth:$dob</tr>
			<tr><td>Age:$age<td>Sex:$sex<td>ID card no:$card</tr>
			<tr><td>Place of birth:$pob<td>County:$county</tr>
			<tr><td>Informant is $informant who is a $tinfo</td></tr>
			<tr><td>Date registered:$dor<td>Agent Code:$agentno</tr>
			</table>";
			echo"</html>"; */
			echo"You have successfully ammended $name's record";
			/*else{
			isset($_POST['delete']))
			mysql_query("DELETE from breg no,permit_no,dname,dod,age,sex,id_no,occupation,pod,county,dcause,informant,tinfo,obno,dor,agentno,status,timeSys where no='$no'")or die(mysql_error());
			echo"RECORD DELTED";
}*/
?>
<ul>
<li><a href="corrections.php">NEXT</li></a><li><a href="profile.php">BACK</li></a></ul>

<?php include("footer.php"); ?>
