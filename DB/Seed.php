<?php
include_once('../INC/db.inc.php');


session_start();



// The admin id to seed info to his account 
$AdminId  =  1 ;
// The number of employees of the admin 
$NumOfEmp = 30 ;
// The number of Items of the admin wh  and qty of each item  
$NumOfItems = 100 ;
$Qty = 50 ;




// counter 
    $i = 0 ;
    while($i < $NumOfEmp ){
        $name  = "Employee".$i; 
        $uname = $name.$AdminId;
        $pass  = "123" ;
        $res = mysqli_query($conn,"INSERT INTO `employees`(`fk_aid`, `name`, `uname`, `password`) VALUES ('$AdminId','$name','$uname','$pass')");
        
        $i = $i + 1 ;

        
    }





    // counter 
        $k = 0 ;

        $sec = 1 ; 
        $rowC = 0 ;
        $row = ["A","B","C","D","E","F","G","H"] ;
        
        
        while($k < $NumOfItems ){
            $name  = "Item-".$k; 
            if($rowC == 7 ){
                $rowC = 0 ;
            }
            $loc   = $sec.$row[$rowC];

            $sec  = $sec + 1 ;
            $rowC = $rowC + 1 ;

            $res2 = mysqli_query($conn,"INSERT INTO `items`(`fk_aid`, `name`, `location`, `qty`) VALUES ('$AdminId','$name','$loc','$Qty')");
            
            
            $k = $k + 1 ;


        }


  

        $_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Data base seeded successfully 

</div>

" ;
        header('location: ../PAGES/DB.php');

       

 




?>