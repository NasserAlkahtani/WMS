<?php
include_once('../INC/db.inc.php');


session_start();


$pass = "123";



// The admin id to seed info to his account 
$NumOfAdmins = 2 ;
$WhNames = array("SuperMarket","eStore");
$AdminFname = array("FAHAD","NASSER");
$AdminLname = array("ALHAMDAN","ALZAHRANI");
$WhC = 750;
$AdmiEmail = array("admin1@admin","admin2@admin");
// The number of employees of the admin 
$NumOfEmp = 20;
$EmpNames = array("Mohammed","Nasser","Fahad","Anas","Omar","Hassan","Abdulelah","Saud","Faisal","Abdulrahman" ,"Khalid" , "Salman" , "Naif" , "Saad" , "Ibrahim" , "Riyadh" , "Jubran" , "Abdullah" , "Salem" , "waled");
$EmpUnames = array("MOH","NAS","FAH","ANA","OMA","HAS","ABD1","SAU","FAI","ABD2" ,"KHA" , "SAL" , "NAI" , "SAA" , "IBR" , "RIY" , "JUB" , "ABD3" , "SALE" , "WA");
// The number of Items of the admin wh  and qty of each item  
$NumOfItems = 20 ;
$ItemNames = array("Milk","Cola","Pepsi","Water","Laban" , "breed","tuna" ,"Rice" , "Fish" , "cornFlex" , "IphoneX" , "MacbookPro" , "MacbookAir" , "GTX1080" , "iPadPro" , "Dell-Laptop" , "Lg-tv" , "BenQtv" , "GalaxyS8" , "Pixel3");
$Dsc = array(
    "Almarai 1L low fat milk","Soft drink from cocacola 355ml", "soft drink from Pepsi 350ml" , "Nofa water 2L","Alblad Low fat laban 2L","Lusien brown bread 10g","freash Tuna fish 200g","Abo kas 2kg white rice","2 Freash Fish ","Kelloggs Corn flex 750g"

,"Apple Iphone x 250gb 8GB RAM", "Apple macbookPro i5 250 gb 8gb RAM","Apple macbookAir i7 250 gb 16gb RAM","NVIDIA GeForce GTX 1080","Apple Ipad pro 250gb 8GB RAM","DELL lattiude-95579 i7 250 gb 16gb RAM",

"LG ULTRA WIDE TV 120fps 4K","Benq TV 60fps 1080p","Samsuing Galaxy S8 8GB RAM andriod","Google pixel3 8GB RAM andriod");




$loc = array("R1S3","R2S5","R3S1","R4S7","R5S1","R6S9","R8S3","R9S2","R10S1","R1S3","R2S5","R3S1","R4S7","R5S1","R6S9","R8S3","R9S2","R10S1","R12S20","R0S0");
$Qty = 50 ;




// counter 
    $i = 0 ;
    while($i < $NumOfAdmins ){
        $res = mysqli_query($conn,"INSERT INTO `admins`(`fname`, `lname`, `email`, `password`,`whname`,`Cpac`) VALUES ('$AdminFname[$i]','$AdminLname[$i]','$AdmiEmail[$i]','$pass','$WhNames[$i]','$WhC')");

        
        if($i == $NumOfAdmins){
            
            $_SESSION["Msg"] = "

            <div class='alert alert-danger' role='alert'>
            
            Something went wrong inserting admins > emails  Line 36-56
            
            </div>
            
            " ;
                    header('location: ../PAGES/DB.php');
       }else{
        $i = $i + 1 ;    
       }

    }

       $res2 = mysqli_query($conn,"SELECT id from admins");

       $adminsID = array();
       $ii = 0  ;
       while($row2 =  mysqli_fetch_assoc($res2) ){


        array_push($adminsID,$row2['id']);


        $ii = $ii + 1 ; 
       }





       if($ii == $NumOfAdmins ){



        $iii =  0 ;

        $idC = 0 ; 
        while($iii < $NumOfEmp){


        if($iii == 10 ){
            $idC = 1 ;
        }

        $res3 = mysqli_query($conn,"INSERT INTO `employees`(`fk_aid`, `name`, `uname`, `password` , `phone`) VALUES ('$adminsID[$idC]','$EmpNames[$iii]','$EmpUnames[$iii]','$pass', '+966501203845')");


        
        $iii = $iii + 1 ;

 
       }










       $iii =  0 ;

       $idcI = 0 ; 
       while($iii < $NumOfItems){


       if($iii == 10 ){
           $idcI = 1 ;
       }

       $res3 = mysqli_query($conn,"INSERT INTO `items` (`fk_aid`, `name`, `location`, `qty`, `Dsc`) VALUES ('$adminsID[$idcI]','$ItemNames[$iii]','$loc[$iii]','$Qty','$Dsc[$iii]')");

     
       $iii = $iii + 1 ;

       echo $iii."<br>";
       echo $idcI."<br>";

      }


        

        $_SESSION["Msg"] = "

            <div class='alert alert-success' role='alert'>

            Data base seeded successfully 

            </div>
            " ;


        header('location: ../PAGES/DB.php');



       }else{
           
        $_SESSION["Msg"] = "

        <div class='alert alert-danger' role='alert'>
        
        Something went wrong number of admins in db > $-NumOfAdmins line 58-70
        
        </div>
        
        " ;
                header('location: ../PAGES/DB.php');
        
               
       }


  


       

 




?>