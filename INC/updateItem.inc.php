<?php
include_once('db.inc.php');

session_start() ;

$desc = $_POST['Desc'];
$name = $_POST['name'];
$qty = (int)$_POST['Qty'];
$location = $_POST['Location'];
$fk_id =  $_SESSION['id'] ;
$id = $_POST['id'];



$Cpacity = 0 ;
$res3 = mysqli_query($conn,"SELECT Cpac FROM admins WHERE id = '$fk_id' ");
while($row = mysqli_fetch_assoc($res3)) {
 $Cpacity =  $row['Cpac'];

}


$TotalQty = 0 ;
$res3 = mysqli_query($conn,"SELECT * FROM Items WHERE fk_aid = '$fk_id' ");
while($row = mysqli_fetch_assoc($res3)) {


  
  $TotalQty += (int)$row['qty'] ;

}

$CpacLeft =  (int)$Cpacity-(int)$TotalQty;

$cRes = mysqli_query($conn,"SELECT * FROM  `items` WHERE fk_aid='$fk_id' AND id = '$id' ");

$PrevQty = 0 ;
$iid = "" ;
while($row2 = mysqli_fetch_assoc($cRes)) {
    $PrevQty = (int)$row2["qty"];
    $iname = $row2["name"];
     $iid = $row2['id'];
}

if($CpacLeft >= $qty - $PrevQty ){





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


}else{
    $_SESSION["Msg"] = "

    
    <div class='alert alert-danger s' role='alert'>
    
     There is no Enoguh space  you can add space from my accout tab !
    
    </div>
    " ;
    
    header("location: ../PAGES/Admin/ItemInfo.php?id=".$id." ");
    
}

?>
