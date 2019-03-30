<?php
include_once('db.inc.php');

session_start() ;

$qty = (int)$_POST['Qty']; // item new qty
$fk_id =  $_SESSION['id'] ; // admin id
$eid = $_SESSION["eid"]; // emp id
$id = $_POST['id']; // item id


$cRes = mysqli_query($conn,"SELECT * FROM  `items` WHERE fk_aid='$fk_id' AND id = '$id' ");

if($cRes){


    $PrevQty = 0 ;
    $iid = "" ;
    while($row2 = mysqli_fetch_assoc($cRes)) {
        $PrevQty = (int)$row2["qty"];
        $iname = $row2["name"];
         $iid = $row2['id'];
    }



$res = mysqli_query($conn,"UPDATE items
                             SET qty='$qty'
                             WHERE id = '$id' AND fk_aid = '$fk_id' ");




if($res){


    if($PrevQty > $qty){

        $addedQty = $PrevQty - $qty ; 


    

        
        $res2 = mysqli_query($conn,"INSERT INTO `trans` (`fk_eid`, `fk_iid`, `iname` , `type`, `qty` ) VALUES ('$eid','$iid','$iname','D','$addedQty')");

    }else if($PrevQty < $qty){


        $addedQty =  $qty - $PrevQty ; 
        $res3 = mysqli_query($conn,"INSERT INTO `trans` (`fk_eid`, `fk_iid`, `iname` , `type`, `qty` ) VALUES ('$eid','$iid','$iname','I','$addedQty')");
    }

$_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Updated information successfully

</div>

" ;

header("location: ../PAGES/Employee/ItemInfo.php?id=".$id." ");

}else{

    $_SESSION["Msg"] = "

<div class='alert alert-danger s' role='alert'>

Something went wrong !

</div>

" ;

header("location: ../PAGES/Employee/ItemInfo.php?id=".$id." ");

}







mysqli_close($conn);


}else{

    $_SESSION["Msg"] = "

    <div class='alert alert-danger s' role='alert'>
    
    Something went wrong !
    
    </div>
    
    " ;
    
    header("location: ../PAGES/Employee/ItemInfo.php?id=".$id." ");
    
    
    

}


?>
