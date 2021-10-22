<?php
$USERNAME = "root";
$PASSWORD = "";
$HOST = "localhost";

//CREATE connection
$conn = new MYSQLI($HOST, $USERNAME, $PASSWORD);

//check connection
if ($conn->connect_error) {
die("Connection FAILED: " . $conn->connect_error);
}
// echo "Connected successfully";

// Connect to database
$db = "project_laundry";
if ($conn->select_db($db)) {	//$conn: connection object
// echo "Select DB '$db' successfully";
}
else {
echo "Couldn't select the '$db' DB";
}

// change charset
$conn->set_charset('utf8mb4');