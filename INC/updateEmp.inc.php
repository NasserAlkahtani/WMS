<?php
include_once('db.inc.php');

session_start() ;
$fk_aid = $_SESSION['id'];


$pass = $_POST['pass'];
$name = $_POST['name'];
$uname = $_POST['uname'];
$fk_id =  $_SESSION['id'] ;
$id = $_POST['id'];


$res = mysqli_query($conn,"UPDATE `employees` SET `name`='$name',`uname`='$uname', `password`='$pass'
                           WHERE fk_aid = '$fk_aid' ");



if($res){
$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully 

</div>

" ;

header("location: ../PAGES/Admin/EmpInfo.php?id=".$id." ");

}else{

    $_SESSION["Msg"] = "

<div class='alert alert-danger s' role='alert'>

Something went wrong ! 

</div>

" ;

header("location: ../PAGES/Admin/EmpInfo.php?id=".$id." ");

}







mysqli_close($conn);
?>
