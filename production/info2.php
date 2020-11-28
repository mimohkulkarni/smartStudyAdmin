<?php
require("dbconnect.php");
$request = mysqli_real_escape_string($linkId, $_POST["query"]);
$query = "SELECT name, mobileno FROM perinfo WHERE name LIKE '%".$request."%' OR mobileno LIKE '%".$request."%'";
$result = mysqli_query($linkId, $query);
$data = array();
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result))
	{
	  $data[] = $row["name"]."  ".$row["mobileno"];
	}	
 	echo json_encode($data);
}
?>