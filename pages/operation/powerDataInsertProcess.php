<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$dataStream = $_GET["data"];
$dataStreamArray = explode('A', $dataStream);

//received current values
$voltage = $dataStreamArray[0];
$current1 = $dataStreamArray[1];
$current2 = $dataStreamArray[2];
$current3 = $dataStreamArray[3];
$current4 = $dataStreamArray[4];
$current5 = $dataStreamArray[5];

$insertSql = "INSERT INTO `powerdatatable` (`voltage`, `current1`,"
        . " `current2`, `current3`, `current4`, `current5`)"
        . " VALUES ( $voltage, '$current1', '$current2', '$current3', '$current4', '$current5')";

if ($conn->query($insertSql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
}

$conn->close();
