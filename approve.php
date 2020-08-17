
<html>
<head>
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
<p align="right"><a href="registrar.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a>
<p><b><h3>SELECT TYPE OF RECORDS THAT YOU WISH TO APPROVE</p></b></h3><hr>
<div><strong>
<form method="POST" action="approve.php">
TYPE
<select name="type" type="text">
<option value="birth">BIRTHS</option>
<option value="death">DEATH</option>
</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
AGENT CODE:<input type="text" name="agent" maxlength="4" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<!--MONTH:<input type="text" name="month" maxlength="4" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
<input type="submit" name="submit" value="View" onclick="view"></strong>
</form>
</div ><hr>
<div id="view">
<?php
if(isset($_POST['submit']))
if (isset($_POST['type'])) { $type = $_POST['type']; }
if (isset($_POST['agent'])) { $agent = $_POST['agent']; } 
	$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
                  mysql_select_db("pomis") or die ("Couldn't find Database");
				  if($type=="death"){
				  	$select = "SELECT * FROM dreg where agentno=$agent and status!='approved' and status!='rejected'";
					$qry=mysql_query($select);	
					echo"<table border=1 >";
				     
                  echo"<tr><td><b>AGENT NO<TD><b>NO<td><b>PERMIT NO<td><b>DECEASED NAME<td><b>Date of DEATH<td><b>PLACE OF DEATH<td><b>COUNTY<td><b>CAUSE OF DEATH<td><b>AGE<td><b>ID CARD NO<td><b>
				  Sex<td><b>OCCUPATION<td><b>INFORMANT<td><b>DESCRIPTION<td><b>DATE REGISTERED</b></tr>";	
				
					while($rec = mysql_fetch_array($qry))
					{
					$nos=$rec["no"];
                  echo"<tr><td>".$rec["agentno"]."<td>".$rec["no"]."<td>".$rec["permit_no"]."<td>".$rec["dname"]."<td>".$rec["dod"]."<td>".$rec["pod"]."<td>".$rec["county"]."<td>".
				  $rec["dcause"]."<td>".$rec["age"]."<td>".$rec["id_no"]."<td>".$rec["sex"]."<td>".$rec["occupation"]."<td>".$rec["informant"]."<td>".$rec["tinfo"]."<td>".$rec["dor"];
				  echo"<td><form method='POST' action='approve13.php'><input type='hidden' name='number' value='$nos'><input type='submit' name='submit' value='Approve'></form></td>";
				  echo"<td><form method='POST' action='deathrej.php'><input type='hidden' name='number' value='$nos'><input type='submit' name='submit' value='Reject'/></form></td>";
				  }
					echo"</table>";
					
					}
					else
					if($type=="birth"){
					$select = "SELECT * FROM breg where agentno=$agent and status!='approved' and status!='rejected'" ;
					$qry=mysql_query($select);
					
					echo "<TABLE BORDER=2>";
echo"<TR><TD><B>AGENT NO</B><TD><B>NO</B><TD><B>NOTIFICATION NO</B><TD><B>CHILD NAME</B><TD><B>DATE OF BIRTH</B><TD><B>PLACE OF BIRTH</B><TD><B>SEX</B><TD><B>MOTHER</B><TD><B>AGE</B>
<TD><B>ID CARD NO</B><TD><B>MARITAL STATUS</B><TD><B>RESIDENCE</B><TD><B>FATHER</B><TD><B>AGE</B><TD><B>ID CARD NO</B><TD><B>DATE REGISTERED</B>
<TD><B>INFORMANT</B><TD><B>COUNTY</B></TD><TD><B>TIME REGISTERED</B></TR>";
while ($myrow = mysql_fetch_array($qry))
{
$number=$myrow["no"];
echo "<TR><TD>".$myrow["agentno"]."<TD>".$myrow["no"]."<td>".$myrow["notification_no"]." <td>".$myrow["childname"]."<TD>".$myrow["dob"]."<TD>".$myrow["pob"]."<TD>".$myrow["sex"]."<TD>".$myrow["mother"].
"<TD>".$myrow["age"]."<td>".$myrow["id_no"]."<td>".$myrow["m_status"]."<td>".$myrow["residence"]."<TD>".$myrow["father"]."<td>".$myrow["age2"]."<td>".$myrow["id_no2"]."<TD>".$myrow["dreg"]."<TD>".$myrow["informant"]."<TD>".$myrow["county"]."<TD>".$myrow["timeSys"];
echo"<td><form method='POST' action='approve12.php'><input type='hidden' name='number'value='$number'><input type='submit' name='submit' value='Approve'></form></td>";
				  echo"<td><form method='POST' action='birthreg.php'><input type='hidden' name='number' value='$number'><input type='submit' value='Reject'/></form></td>";
}

echo "</TABLE>";
					}
				?>
				
</div>
<script type="text/javascript">
function view(){
document.getElementById("view");
}
</script>