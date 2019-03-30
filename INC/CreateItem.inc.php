<?php
include_once('db.inc.php');
session_start(); 



$name = $_POST['name'];
$loc = $_POST['loc'];
$qty = (String)$_POST['qty'];
$dsc = $_POST['Dsc'];

$fk_aid = $_SESSION['id'];

$res1 = mysqli_query($conn,"SELECT * FROM items WHERE name = '$name'");



if(mysqli_num_rows($res1) > 0 ){

    
    $_SESSION["Msg"] = "

    <div class='alert alert-danger' role='alert'>
    
    Item (".$name.") Already exist 
    
    </div>
    
    ";
        header('location: ../PAGES/Admin/CreateItem.php');
}else{



$res = mysqli_query($conn,"INSERT INTO `items` (`fk_aid`, `name`, `location`, `qty` , `Dsc`) VALUES ('$fk_aid','$name','$loc','$qty','$dsc')");


if($res){

    $_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Item created successfully 

</div>

";
header('location: ../PAGES/Admin/CreateItem.php');
}else{


    $_SESSION["Msg"] = "

    <div class='alert alert-danger' role='alert'>
    
    Some thing went wrong try agin later
    
    </div>
    
    ";
    header('location: ../PAGES/Admin/CreateItem.php');
}



}





?>


