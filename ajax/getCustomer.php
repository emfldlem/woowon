<?php 
require_once '../includes/db.php'; // The mysql database connection script
//mysql_query("set names utf8");

$query="select C_no, C_name, C_number,C_repre,C_tel,C_Group,C_date from customer";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
//$result = mysql_query($query);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}
# JSON-encode the response
echo $json_response = json_encode($arr);
?>