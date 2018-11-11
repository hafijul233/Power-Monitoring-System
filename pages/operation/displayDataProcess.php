<?php

require '../config/dbconnection.php';

class Datatable{
    public $id;
    public $voltage;
    public $power1;
    public $power2;
    public $power3;
    public $power4;
    public $power5;
    public $dateTime;
 
}

$dataArray = array();
$displaySql = "SELECT * FROM `powerdatatable` ORDER BY `Id` DESC";
$result = $conn->query($displaySql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $dataset = new Datatable();
    $dataset->id = $row["id"];
    $dataset->voltage = round($row["voltage"],3);
    $dataset->power1 = getpowerinkWh($row["voltage"], $row["current1"]);
    $dataset->power2 = getpowerinkWh($row["voltage"], $row["current2"]);
    $dataset->power3 = getpowerinkWh($row["voltage"], $row["current3"]);
    $dataset->power4 = getpowerinkWh($row["voltage"], $row["current4"]);
    $dataset->power5 = getpowerinkWh($row["voltage"], $row["current5"]);
    $dataset->dateTime = $row["created"];
    array_push($dataArray, $dataset);
    }
} else {
    echo "0 results";
}
$conn->close();
