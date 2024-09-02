<?php
$username = $_GET['username'];
include_once 'dbconnect.php';

$var = array();
$sql = "SELECT * FROM passanger WHERE passanger.username = '$username'";
if(! ($result = mysqli_query($conn, $sql)))
{
	
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
else
{
	while($row = mysqli_fetch_object($result))
	{
		$var[] = $row;	
	}
	echo '{"users":'.json_encode($var).' , ';
}

mysqli_close($conn);


?>