<?php

    session_start(); 

    $Msg = $_SESSION["Msg"];


    session_destroy() ;
    
    session_start(); 
    
    $_SESSION["Msg"] = $Msg ;


    header('location: ../PAGES/Signin.php');


?>