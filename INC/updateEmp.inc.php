<?php
include_once('db.inc.php');

session_start() ;
$fk_aid = $_SESSION['id'];


$pass = $_POST['pass'];
$name = $_POST['name'];
$uname = $_POST['uname'];
$fk_id =  $_SESSION['id'] ;
$id = $_POST['id'];




$cRes = mysqli_query($conn,"SELECT * FROM  `employees` WHERE `uname`='$uname' ");


if(mysqli_num_rows($cRes) > 0 ){

    $_SESSION["Msg"] = "

    <div class='alert alert-danger s' role='alert'>
    
    Employee with user name ( ".$uname." ) Already exist  
    
    </div>
    
    " ;
    
    header("location: ../PAGES/Admin/EmpInfo.php?id=".$id." ");


}else{

$res = mysqli_query($conn,"UPDATE `employees` SET `name`='$name',`uname`='$uname', `password`='$pass'
                           WHERE fk_aid = '$fk_aid' AND id = '$id' ");



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
}


?>
