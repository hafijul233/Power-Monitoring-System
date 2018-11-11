<?php
//This Page Content All The default Congfiguration setting value

$projectTitle = "Power Monitoring System";
$developerName = array("Mohammad Hafijul Islam");
$currentVersion = "1.0.1";
$companyName = "ABCCompany.Ltd";
$programName = "Power Monitoring System";

function ErrorMessage(){
    if(isset($_SESSION["Error"])){
        echo "<hr><div class=\"alert alert-danger\"><center>" . htmlentities($_SESSION["Error"]) . "</center></div>";
      
      $_SESSION["Error"] = null;
    }
}

function getpowerinkWh($volt, $cur) {
    $power = (($volt * $cur) * 24) / 1000;
    $power = round($power, 3);
    return $power;
}