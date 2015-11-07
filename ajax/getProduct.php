<?php 
require_once '../includes/db.php'; // The mysql database connection script
//mysql_query("set names utf8");

$query="select P_no, P_name, P_stand,P_unit,P_price,P_group,P_date from products";
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