<?php 
function countrecords($table){
include("db_connect.php");
$sql="SELECT * FROM $table ORDER BY id";
$result=mysqli_query($con,$sql);
$countrows=mysqli_num_rows($result);
echo $countrows;
}
function check(){
	$currentuser=getLoggedMemberID();
	if ($currentuser=="guest") {
		# code...
		redirect("index.php?signIn=1");
	}
	
}
?>