<?php
    session_start();
    require_once '../../config/dbconnection.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    //echo  $email . " -> " . $password . "<br>";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //echo  "After Filter:" . $email . " -> " . $password . "<br>";
        $sql = "SELECT `id`, `emailaddress`, `password` from users WHERE `emailaddress` = '$email' AND `password` = '$password';";
        
            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION["email"] = $email;
            header("Location: ../index.php?page=dashboard");
        } 
        else {
            $_SESSION["Error"] = "User Not Found";
        header("Location: ../login.php");
        }
        $conn->close();
    }
    else{ 
        $_SESSION["Error"] = "Email is invalid";
        header("Location: ../login.php");
    }


