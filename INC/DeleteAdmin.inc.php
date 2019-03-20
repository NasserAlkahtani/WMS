<?php
include_once('db.inc.php');
$id = $_GET["id"];




$res = mysqli_query($conn,"DELETE FROM admins WHERE id = '$id' ");

if($res){
$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

your account has been deleted successfully

</div>

" ;

header('location: Signout.inc.php');

}else{

    $_SESSION["Msg"] = "

<div class='alert alert-danger s' role='alert'>

Something went wrong !

</div>

" ;


header('location: Signout.inc.php');
}



mysqli_close($conn);
?>
