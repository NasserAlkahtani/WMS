<?php 

include_once('../INC/db.inc.php');

mysqli_query($conn,"DELETE FROM `employees`");
mysqli_query($conn,"DELETE FROM `items`");

?>