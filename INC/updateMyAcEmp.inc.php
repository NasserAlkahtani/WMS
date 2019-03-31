<?php
include_once('db.inc.php');

session_start() ;


$pass =  $_POST['pass'];
$name =  $_POST['name'];
$uname = $_POST['uname'];
$fk_aid = $_SESSION['id'] ;
$id = $_SESSION['eid'];
$phone = $_POST['phone'];



$cRes = mysqli_query($conn,"SELECT * FROM  `employees` WHERE `id`='$id' ");


if(mysqli_num_rows($cRes) > 0 ){



    while($row = mysqli_fetch_assoc($cRes)) {

        $unameDB = $row["uname"];

    }

    if($uname == $unameDB){

        $res = mysqli_query($conn,"UPDATE `employees` SET `name`='$name',`uname`='$uname', `password`='$pass'  , `phone`='$phone'
        WHERE fk_aid = '$fk_aid' AND id = '$id' ");



if($res){

    
    $_SESSION['name'] = $name;
    $_SESSION['uname'] = $uname;
    $_SESSION['epass'] = $pass;


$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully 

</div>

" ;

header("location: ../PAGES/Employee/Myaccount.php");

}else{

$_SESSION["Msg"] = "

<div class='alert alert-danger s' role='alert'>

Something went wrong ! 

</div>

" ;

header("location: ../PAGES/Employee/Myaccount.php");

}







              mysqli_close($conn);



    }else{
        $_SESSION["Msg"] = "

        <div class='alert alert-danger s' role='alert'>
        
        Employee with user name ( ".$uname." ) Already exist  
        
        </div>
        
        " ;
        
        header("location: ../PAGES/Employee/Myaccount.php");
    
    }
   




















}else{



$res = mysqli_query($conn,"UPDATE `employees` SET `name`='$name',`uname`='$uname', `password`='$pass'
                          , `phone`='$phone' WHERE fk_aid = '$fk_aid' AND id = '$id' ");



if($res){


    $_SESSION['name'] = $name;
    $_SESSION['uname'] = $uname;
    $_SESSION['epass'] = $pass;


$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully 

</div>

" ;

header("location: ../PAGES/Employee/Myaccount.php");

}else{

    $_SESSION["Msg"] = "

<div class='alert alert-danger s' role='alert'>

Something went wrong ! 

</div>

" ;

header("location: ../PAGES/Employee/Myaccount.php");

}







mysqli_close($conn);
}


?>
