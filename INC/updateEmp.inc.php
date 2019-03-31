<?php
include_once('db.inc.php');

session_start() ;


$pass =  $_POST['pass'];
$name =  $_POST['name'];
$uname = $_POST['uname'];
$phone = $_POST['phone'];
$fk_aid = $_SESSION['id'] ;
$id = $_POST['id'];

$preUname = "";

$prUnameQ =  mysqli_query($conn,"SELECT * FROM  `employees` WHERE `id`='$id' ");


while($rowPre = mysqli_fetch_assoc($prUnameQ)) {

    $preUname = $rowPre['uname'];

}




$cRes = mysqli_query($conn,"SELECT * FROM  `employees` WHERE `uname`='$uname' ");



if(mysqli_num_rows($cRes) > 0 ){


        if($preUname == $uname){

                                            $res = mysqli_query($conn,"UPDATE `employees` SET `name`='$name',`uname`='$uname', `password`='$pass'
                                            , `phone`='$phone' WHERE fk_aid = '$fk_aid' AND id = '$id' ");



                                if($res){
                                $_SESSION["Msg"] = "

                                <div class='alert alert-success' role='alert'>

                                Updated information successfully 

                                </div>

                                " ;

                                header("location: ../PAGES/Admin/EmpInfo.php?id=".$id." ");

                                }else{

                                $_SESSION["Msg"] = "

                                <div class='alert alert-danger' role='alert'>

                                Something went wrong ! 

                                </div>

                                " ;

                                header("location: ../PAGES/Admin/EmpInfo.php?id=".$id." ");
                                }



        }else{

                                $_SESSION["Msg"] = "

                                <div class='alert alert-danger' role='alert'>
                                
                                Employee with user name ( ".$uname." ) Already exist  
                                
                                </div>
                                
                                " ;
                                
                                header("location: ../PAGES/Admin/EmpInfo.php?id=".$id." ");
        
        }

   

}else{

    $res = mysqli_query($conn,"UPDATE `employees` SET `name`='$name',`uname`='$uname', `password`='$pass' , `phone`='$phone' WHERE fk_aid = '$fk_aid' AND id = '$id' ");



if($res){
$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully 

</div>

" ;

header("location: ../PAGES/Admin/EmpInfo.php?id=".$id." ");

}else{

    $_SESSION["Msg"] = "

<div class='alert alert-danger' role='alert'>

Something went wrong ! 

</div>

" ;

header("location: ../PAGES/Admin/EmpInfo.php?id=".$id." ");

}







mysqli_close($conn);
}


?>
