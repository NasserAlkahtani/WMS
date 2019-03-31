<?php
include_once('db.inc.php');

session_start() ;

$email = $_POST['email'];
$pass = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cpac = $_POST['cpac'];
$whname = $_POST['whname'];
$id = $_SESSION['id'];
$semail = "" ;
$preEmail = $_SESSION['email'];


$res1 = mysqli_query($conn,"SELECT * FROM admins WHERE email = '$email' ");




if(mysqli_num_rows($res1) > 0 ){

    while($row = mysqli_fetch_assoc($res1)) {

        $semail = $row['email'];
        
    }


if($preEmail == $semail){

    $res = mysqli_query($conn,"UPDATE admins
    SET fname='$fname',lname='$lname',email='$email',password='$pass',whname='$whname',Cpac='$cpac'
    WHERE id = '$id' ");

    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email; 
    $_SESSION["whname"]   = $whname;
    $_SESSION["capacity"] = (int)$cpac;


$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully 1

</div>

" ;

mysqli_close($conn);
header('location: ../PAGES/Admin/Myaccount.php');


}else{
    $_SESSION["Msg"] = "

<div class='alert alert-danger' role='alert'>

Email ( ".$email." ) already exist ! 

</div>

" ;

mysqli_close($conn);
header('location: ../PAGES/Admin/Myaccount.php');


}



}else{

$res = mysqli_query($conn,"UPDATE admins
                           SET fname='$fname',lname='$lname',email='$email',password='$pass',whname='$whname',Cpac='$cpac'
                           WHERE id = '$id' ");

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['email'] = $email; 
$_SESSION["whname"]   = $whname;
$_SESSION["capacity"] = (int)$cpac;

$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully 

</div>

" ;

mysqli_close($conn);
header('location: ../PAGES/Admin/Myaccount.php');



}





?>
