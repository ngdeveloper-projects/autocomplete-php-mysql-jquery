<?php
include 'dbConfig.php';
$companyTxt = $_GET['term'];
if (isset($companyTxt)){
    $dbArray = array();
	$companyTxt=mysql_real_escape_string($companyTxt);
    $query=mysql_query("SELECT name FROM autocomplete WHERE name like '%$companyTxt%'");	
	while($rows = mysql_fetch_array($query))
		{
		$dbArray[] =$rows['name'];
		}
    echo json_encode($dbArray);
}
?>