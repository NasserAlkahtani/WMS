<?php 

include_once('../INC/db.inc.php');
session_start();
mysqli_query($conn,"DELETE FROM `trans`");
mysqli_query($conn,"DELETE FROM `items`");
mysqli_query($conn,"DELETE FROM `employees`");
mysqli_query($conn,"DELETE FROM `admins`");
$_SESSION["Msg"] = "<div class='alert alert-success' role='alert'>

Data base cleared successfully 

</div>

" ;
header('location: ../PAGES/DB.php');
?>