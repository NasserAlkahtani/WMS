<?php
include_once('db.inc.php');
session_start(); 



$name = $_POST['name'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$fk_aid = $_SESSION['id'];

$res1 = mysqli_query($conn,"SELECT * FROM employees WHERE uname = '$uname'");




if(mysqli_num_rows($res1) > 0 ){


    $_SESSION["Msg"] = "

    <div class='alert alert-danger' role='alert'>
    
    User name Already exist 
    
    </div>
    
    ";
        header('location: ../PAGES/Admin/CreateEmployee.php');
}else{



$res = mysqli_query($conn,"INSERT INTO `employees`(`fk_aid`, `name`, `uname`, `password` , `phone`) VALUES ('$fk_aid','$name','$uname','$pass' , '$phone')");


if($res){

    $_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Employee created successfully 

</div>

";
    header('location: ../PAGES/Admin/CreateEmployee.php');
}else{
    $_SESSION["Msg"] = "

    <div class='alert alert-danger' role='alert'>
    
    Some thing went wrong try agin later
    
    </div>
    
    ";
        header('location: ../PAGES/Admin/CreateEmployee.php');
}


}
?>


