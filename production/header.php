<?php
require("dbconnect.php");

session_start();
//if($_SESSION['uname'] == "" || empty($_SESSION['uname']))
//{
//	header("Location:logout.php");
//} 
$sql_insti_name = "SELECT insti_name from insti_info where insti_id = (SELECT insti_id from perinfo_superior where mobileno = '".$_SESSION['uname']."')";
$result_insti_name = mysqli_query($linkId, $sql_insti_name); 
while($row_insti_name = mysqli_fetch_array($result_insti_name)){
	$insti_name = $row_insti_name['insti_name'];
}
$sql_username = "SELECT name from perinfo_superior where mobileno = '".$_SESSION['uname']."'";
$result_username = mysqli_query($linkId,$sql_username);
while($row_username = mysqli_fetch_array($result_username)){
	$user_name = $row_username['name'];
}
?>