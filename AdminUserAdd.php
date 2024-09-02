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
// Insert data into database
$sql = "INSERT INTO passanger (username, firstname, middlename, lastname, email, cellphone, gender, birthday, password) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssssssss", $username, $firstname, $middlename, $lastname, $email, $tel, $gender, $birthday, $pwd1);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) === 0) {
    echo "Error: Failed to insert data. " . mysqli_stmt_error($stmt) . "\n";
} else {
    echo "Data inserted successfully.";
}

// Close connection
mysqli_close($conn);
?>