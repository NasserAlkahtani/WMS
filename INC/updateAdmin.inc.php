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

$res = mysqli_query($conn,"UPDATE admins
                           SET fname='$fname',lname='$lname',email='$email',password='$pass',whname='$whname',Cpac='$cpac'
                           WHERE id = '$id' ");


$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully 

</div>

" ;

header('location: ../PAGES/Admin/Myaccount.php');









mysqli_close($conn);
?>
