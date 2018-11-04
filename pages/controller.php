<?php
if($page != NULL){
    switch($page){
        case "dashboard": require 'dashboard.php';
            break;
        
        case "history": require 'history.php';
            break;
        
        case "userprofile": require 'userprofile.php';
            break;
        
        case "application": require 'application.php';
            break;
        
        case "notification": require 'notifications.php';
            break;
        
        
        default :require '404.php';
            break;
    }
}
else{
    require 'dashboard.php';
}
