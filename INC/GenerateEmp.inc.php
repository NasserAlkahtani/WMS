
<?php
include_once('../INC/db.inc.php');


session_start();



// The admin id to seed info to his account 
$AdminId  =  $_SESSION['id'] ;
// The number of employees of the admin 
$NumOfEmp =  $_POST['NumOfEmp']  ;
// The number of Items of the admin wh  and qty of each item  


if($NumOfEmp > 0 ){



$res = false ; 

// counter 
    $i = 0 ;
    $Counter = 0 ; 
    while($i < $NumOfEmp ){
        $name  = "Employee-".$Counter; 
        $uname = $name.$AdminId;
        $pass  = "123" ;
        $Counter = $Counter + 1  ; 
        $res1 = mysqli_query($conn,"SELECT * FROM employees WHERE uname = '$uname'");

   if(mysqli_num_rows($res1) > 0 ){
    
    $_SESSION["Msg"] = "

    <div class='alert alert-danger' role='alert'>
    
    Some thing went wrong try agin later
    
    </div>
    
    ";
    

   }else{

        $res = mysqli_query($conn,"INSERT INTO `employees`(`fk_aid`, `name`, `uname`, `password` ,`phone`) VALUES ('$AdminId','$name','$uname','$pass','+966-000-000-000')");
        
        $i = $i + 1 ;     
        
        
        $_SESSION["Msg"] = "

<div class='alert alert-success' role='alert'>

Employees created successfully 

</div>

";


    }


}



header('location: ../PAGES/Admin/CreateEmployee.php');


}else{
    $_SESSION["Msg"] = "

    <div class='alert alert-danger' role='alert'>
    
    Number of Employees must more than 0 
    
    </div>
    
    ";
        header('location: ../PAGES/Admin/CreateEmployee.php');
}
?>