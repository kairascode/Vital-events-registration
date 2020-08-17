<?PHP include("header.php");?>
<?php
if(isset($_POST['submit']))
if (isset($_POST['permit'])) { $permit = $_POST['permit']; }
if (isset($_POST['deceased'])) { $deceased = $_POST['deceased']; } 
if (isset($_POST['dod'])) { $dod = $_POST['dod']; } 
if (isset($_POST['age'])) { $age = $_POST['age']; }
if (isset($_POST['sex'])) { $sex = $_POST['sex']; }  
if (isset($_POST['card'])) { $card = $_POST['card']; }
if (isset($_POST['occ'])) { $occ = $_POST['occ'];}
if (isset($_POST['pod'])) { $pod = $_POST['pod']; } 
if (isset($_POST['county'])) { $county = $_POST['county']; } 
if (isset($_POST['dcause'])) { $dcause = $_POST['dcause']; } 
if (isset($_POST['informant'])) { $informant = $_POST['informant']; } 
if (isset($_POST['tinfo'])) { $tinfo = $_POST['tinfo']; } 
if (isset($_POST['obno'])) { $obno = $_POST['obno']; } 
if (isset($_POST['dor'])) { $dor = $_POST['dor']; } 
if (isset($_POST['agentno'])) { $agentno = $_POST['agentno']; }

$formerrors = false;

	if ($permit === '') :
		$err_myname = '<p>Sorry, the permit no is a required field</p>';
		$formerrors = true;
	endif; // input field empty
	if (!($formerrors)) :
		 mysql_connect("localhost", "root", "") or die("We couldn't connect!");
            mysql_select_db("pomis");
            mysql_query("INSERT INTO dreg (permit_no,dname,dod,age,sex,id_no,occupation,pod,county,dcause,informant,tinfo,obno,dor,agentno,status) 
            	VALUES('$permit','$deceased','$dod','$age','$sex','$card','$occ','$pod','$county','$dcause','$informant','$tinfo','$obno','$dor','$agentno','')") or die(mysql_error());
            echo "<html><head><title>REGISTRATION DETAILS</title></head>";
			echo"<body width=400 height=500 font color='blue'>";
			echo"<table border='1' cellspacing='2'>
			<th colspan='5' background='blue'>$deceased Registered details</th>
			<tr><td>permit no:$permit<td>Deceased name:$deceased<td>Date of death:$dod</tr>
			<tr><td>Age:$age<td>Sex:$sex<td>ID card no:$card</tr>
			<tr><td>Occupation:$occ<td>Place of death:$pod<td>County:$county</tr>
			<tr><td>Cause of death:$dcause<td>Informant is $informant who is a $tinfo<td>OB/No:$obno</tr>
			<tr><td>Date registered:$dor<td>Agent Code:$agentno</tr>
			</table>";
			echo"</html>";

            endif; 


?>
<ul>
<li><a href="D1.php">NEXT</li></a><li><a href="profile.php">BACK</li></a></ul>

<?php include("footer.php"); ?>
