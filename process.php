<html>
<HEAD><title>BIRTH CERTIFICATE</title>
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
$conn=mysql_connect("localhost","root","") or die("Server not found...");
mysql_select_db("pomis",$conn);
$sql=mysql_query("select* from breg where notification_no='$search' and status='approved' AND agentno in(select usercode from agents where Staff_no in(select staff_no from staff where username='$username'))");
while($row=mysql_fetch_assoc($sql))
{
$Today = date('d:m:y');
$new = date('l, F d, Y', strtotime($Today));
echo"<table border=1 height=600 width=800 cellpadding=0 cellspacing=0>";
echo"<tr><th colspan=5><img src='kseal.jpg' width='80' height='80'><br>REPUBLIC OF KENYA</Th></TR>";
echo"<tr><th colspan=5>CERTIFICATE OF BIRTH</Th></TR>";

echo "<tr><td><b><font color='red'>COUNTY</b></font>:&nbsp".$row['county']."<td colspan=1><b><font color='red'>PLACE OF BIRTH</b></font>:&nbsp".$row["pob"]."<td><b><font color='red'>NOTIFICATION</b></font>:&nbsp".$row['notification_no']."</td><tr>";

echo "<tr><td><b><font color='red'>TYPE OF BIRTH</b></font>:&nbsp".$row['tyb']."<td><b><font color='red'>CHILD NAME</b></font>:&nbsp".$row['childname']."<td><b><font color='red'>DATE OF BIRTH</b></font>:&nbsp".$row['dob']."</td><tr>";

echo"<tr><td><b><font color='red'>SEX</b></font>:&nbsp".$row['sex']."<td><b><font color='red'>FATHER</b></font>:&nbsp".$row['father']."<td><b><font color='red'>MOTHER</b></font>:&nbsp".$row['mother']."</td><tr>";
echo"<tr><td><b><font color='red'>INFORMANT</b></font>:&nbsp".$row['tinfo']."<td><b><font color='red'>DATE REGISTERED</b></font>:&nbsp".$row['dreg']."<td><b><font color='red'>DATE ISSUED</b></font>:&nbsp$new</td></tr>";
echo"<tr><th COLSPAN=5>REGISTRAR'S SIGNATURE:_________________</TH></TR>";

}
echo"</table>";

mysql_close($conn);?>
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