<?php
include_once('db.inc.php');
$itemId = $_GET["id"];
session_start() ;



$res = mysqli_query($conn,"DELETE FROM items WHERE id = '$itemId' ");


if($res){

  $_SESSION["Msg"] = "

      <div class='alert alert-success' role='alert'>

      Item has been deleted !

      </div>

      ";


}
else{
  $_SESSION["Msg"] = "

      <div class='alert alert-danger' role='alert'>

      Item has not been deleted, something went wrong !! !

      </div>
  
      ";


}
header('location: ../PAGES/Admin/Items.php');




mysqli_close($conn);



?>

