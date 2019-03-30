<?php
include_once('db.inc.php');

session_start() ;

$desc = $_POST['Desc'];
$name = $_POST['name'];
$qty = (int)$_POST['Qty'];
$location = $_POST['Location'];
$fk_id =  $_SESSION['id'] ;
$id = $_POST['id'];




$cRes = mysqli_query($conn,"SELECT * FROM  `items` WHERE `name`='$name' AND 'fk_aid'='$fk_id' ");


if(mysqli_num_rows($cRes) > 0 ){

    $_SESSION["Msg"] = "

    <div class='alert alert-danger s' role='alert'>

    Item with the name ( ".$name." ) Already exist

    </div>

    " ;

    header("location: ../PAGES/Admin/ItemInfo.php?id=".$id." ");


}else{

  $res = mysqli_query($conn,"UPDATE items
                             SET name='$name',location='$location',qty='$qty', Dsc='$desc'
                             WHERE id = '$id' AND fk_aid = '$fk_id' ");




if($res){
$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully

</div>

" ;

header("location: ../PAGES/Admin/ItemInfo.php?id=".$id." ");

}else{

    $_SESSION["Msg"] = "

<div class='alert alert-danger s' role='alert'>

Something went wrong !

</div>

" ;

header("location: ../PAGES/Admin/ItemInfo.php?id=".$id." ");

}







mysqli_close($conn);
}


?>
