<?php
include_once('db.inc.php');
$EmpId = $_GET["id"];


session_start() ;

$res = mysqli_query($conn,"DELETE FROM employees WHERE id = '$EmpId' ");


if($res){

  $_SESSION["Msg"] = "

      <div class='alert alert-success' role='alert'>

      Employee has been deleted !

      </div>

      ";


}
else{
  $_SESSION["Msg"] = "

      <div class='alert alert-danger' role='alert'>

      Employee has not been deleted, something went wrong !! !

      </div>
  
      ";


}
header('location: ../PAGES/Admin/Employees.php');




mysqli_close($conn);
?>
