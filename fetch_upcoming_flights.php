<?php
// Database connection settings
$servername = 'localhost';
$dbname = 'at_db';
$username = 'root';
$password = 'koech23';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch upcoming flights
$sql = "SELECT flight_id, route_id, departure_date, departure_time FROM flight WHERE departure_date > NOW() ORDER BY departure_date ASC";
$result = mysqli_query($conn, $sql);

$upcoming_flights = [];

if (mysqli_num_rows($result) > 0) {
    // Fetch all
    $upcoming_flights = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Close connection
mysqli_close($conn);

// Return JSON response
header('Content-Type: application/json');
echo json_encode($upcoming_flights);
?>
