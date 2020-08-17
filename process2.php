<html>
<head><title>DEATH CERTIFICATE</title>
<?php 
session_start();
if(!$_SESSION['loggedin'])
{
header("location:login2.php");
exit;
}
else
echo"<p align='right'><h3><font color='orange'>Welcome, $username</h4></font></p>";
?>
</head>
<body>
<div id="cert">
<?php
$search=$_POST['search'];
$conn= mysql_connect("localhost","root","");
mysql_select_db("pomis",$conn);
$sql=mysql_query("select* from dreg where permit_no='$search'  and status='approved' AND agentno in(select usercode from agents where Staff_no in(select staff_no from staff where username='$username')) ",$conn);

while($row=mysql_fetch_array($sql))
{
$Today = date('y:m:d');
$new = date('l, F d, Y', strtotime($Today));
								
echo"<table border=1 height=600 width=800 cellpadding=0 cellspacing=0>"; 
echo "<tr><th colspan=3><img src='kseal.jpg' width='80' height='80'><br>REPUBLIC OF KENYA</TH></TR>";
echo"<tr><th colspan=3> CERTIFICATE OF DEATH</TH></TR>";

echo"<tr><td><b><font color='gray'>PLACE OF DEATH</b></font>:&nbsp".$row['pod']."<td colspan=1><b><font color='gray'>COUNTY</b></font>:&nbsp". $row['county']."<td><b><font color='gray'>PERMIT NO</b></font>:&nbsp".$row['permit_no']."</td></tr>";
echo"<tr><td colspan=3><b><font color='gray'>DECEASED</b></font>:&nbsp".$row['dname']."</td></tr>";
echo"<tr><td><b><font color='gray'>DATE OF DEATH</b></font>:&nbsp".$row['dod']."<td><b><font color='gray'>AGE</b></font>:&nbsp".$row['age']."<td><b><font color='gray'>SEX</b></font>:&nbsp".$row['sex']."</td></tr>";
echo"<tr><td><b><font color='gray'>CAUSE OF DEATH</b></font>:&nbsp".$row['dcause']."<td><b><font color='gray'>OCCUPATION</b></font>:&nbsp".$row['occupation']."<td><b><font color='gray'>INFORMANT</b></font>:&nbsp".$row['tinfo']."</td></tr>";
echo"<tr><td><b><font color='gray'>DATE REGISTERED</b></font>:&nbsp".$row['dor']."<td colspan=2><b><font color='gray'>DATE ISSUED</b></font>:$new</d></TR>";
echo"<tr><th colspan=3>REGISTRAR'S SIGNATURE:_________________</th></tr>";

//echo"tr><td>";echo $row['approved'];echo"</td></tr>";
echo "</table>";
}

mysql_close($conn);
?>
</div>
<input type="button" value="print certifcate" onClick='printDiv(cert);'/>
<script type="text/javascript">
function printDiv(cert){
var printContents=document.getElementById("cert").innerHTML;
var originalContent=document.body.innerHTML=printContents;
window.print();
document.body.innerHTML=originalContents;
}
</script>
</body>
</html>

