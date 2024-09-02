<?php
$username = $_GET['username'];
$firstname = $_GET['firstname'];
$middlename = $_GET['middlename'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$tel = $_GET['tel'];
$gender = $_GET['gender'];
$birthday = $_GET['birthday'];
$pwd1 = $_GET['pwd1'];


include_once 'dbconnect.php';

$sql = "UPDATE passanger SET  username = '$username', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', a_time = '$atime' WHERE number = '$flightno'";
if(! mysqli_query($conn, $sql))
{
	echo "\nErrormessage: ".mysqli_error($conn)."\n";
}
$sql = "UPDATE class SET capacity = '$ec', price = '$ep' WHERE number = '$flightno' AND name = 'Economy'";
if(! mysqli_query($conn, $sql))
{
	echo "\nErrormessage: ".mysqli_error($conn)."\n";
}
$sql = "UPDATE class SET capacity = '$bc', price = '$bp' WHERE number = '$flightno' AND name = 'Business'";
if(! mysqli_query($conn, $sql))
{
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
echo 0;

mysqli_close($conn);

?>