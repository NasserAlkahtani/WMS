<?php 

include_once('../INC/db.inc.php');
session_start();

mysqli_query($conn,"DELETE FROM `employees`");
mysqli_query($conn,"DELETE FROM `items`");

$_SESSION["Msg"] = "

<div class='alert alert-danger' role='alert'>

Data base cleared successfully 

</div>

" ;
header('location: ../PAGES/DB.php');
?>