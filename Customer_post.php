<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	
	$C_name = $_POST["InputCustomerName"];
	$c_number = $_POST["InputCustomerNo"];
	$C_repre = $_POST["InputCustomerrepresentative"];
	$C_tel = $_POST["InputCustomerTel"];
	$C_phone = $_POST["inputCustomerphone"];
	$C_fax = $_POST["InputCustomerFax"];
	$C_hpage = $_POST["InputCustomerHomepage"];
	$C_fax = $_POST["InputCustomerFax"];
	$C_fax = $_POST["InputCustomerFax"];

	echo "$C_name";
	
	include "includes/db.php";

	//mysql_query("set names utf8");
	
	$sql = "insert into customer(C_name,c_number,C_repre,C_tel,C_phone,C_fax,C_hpage)";
	$sql .= "values('$C_name',$c_number,'$C_repre','$C_tel','$C_phone','$C_fax','C_hpage')";
	mysql_query($sql, $connect);
	mysql_close($connect);


?>

