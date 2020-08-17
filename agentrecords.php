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
echo"<p align='right'><font color=blue><b>Welcome, $username</b></p></font>";
?>
</head>
<body>
<?php
mysql_connect("localhost", "root", "") or die("We couldn't connect!");
            mysql_select_db("pomis");
			$qry=mysql_query("select*from breg where username=$username");
			echo "<TABLE BORDER=1>";
echo"<TR><TD><B>NO</B><TD><B>NOTIFICATION NO</B><TD><B>CHILD NAME</B><TD><B>DATE OF BIRTH</B><TD><B>PLACE OF BIRTH</B><TD><B>SEX</B><TD><B>MOTHER</B><TD><B>AGE</B>
<TD><B>ID CARD NO</B><TD><B>MARITAL STATUS</B><TD><B>RESIDENCE</B><TD><B>FATHER</B><TD><B>AGE</B><TD><B>ID CARD NO</B><TD><B>DATE REGISTERED</B>
<TD><B>INFORMANT</B><TD><B>AGENT NO</B><TD><B>COUNTY</B><TD><B>ACTION</B></TD><TD><B>TIME REGISTERED</B></TR>";
while ($myrow = mysql_fetch_array($result))
{
echo "<TR><TD>".$myrow["no"]."<td>".$myrow["notification_no"]." <td>".$myrow["childname"]."<TD>".$myrow["dob"]."<TD>".$myrow["pob"]."<TD>".$myrow["sex"]."<TD>".$myrow["mother"].
"<TD>".$myrow["age"]."<td>".$myrow["id_no"]."<td>".$myrow["m_status"]."<td>".$myrow["residence"]."<TD>".$myrow["father"]."<td>".$myrow["age2"]."<td>".$myrow["id_no2"]."<TD>".$myrow["dreg"]."<TD>".$myrow["informant"]."<TD>".$myrow["agentno"]."<TD>".$myrow["county"]."<TD>".$myrow["status"]."<TD>".$myrow["timeSys"];
}
echo "</TABLE>";

?>
</html>