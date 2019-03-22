<?php
include_once('db.inc.php');

session_start() ; 

$Fname = $_POST['Fname']; 
$Lname = $_POST['Lname'];
$Email = $_POST['Email'];
$Pass1 = $_POST['Pass1'];
$Pass2 = $_POST['Pass2'];
$Whname = $_POST['whname'];
$Capacity = $_POST['capacity'];


if($Pass1 == $Pass2){
    $res = mysqli_query($conn,"SELECT * FROM admins WHERE email = '$Email' ");
    

    if($res){
                    
                if (mysqli_num_rows($res) == 1) {
                    
                    $_SESSION['erorr'] = "Email is Already used" ;
                    header('location: ../PAGES/Signup.php');
                
                }else{

                    
                    $res2 = mysqli_query($conn,"INSERT INTO `admins` (`fname`, `lname`, `email`, `password` , `whname` ,`Cpac` ) VALUES ('$Fname', '$Lname', '$Email', '$Pass1', '$Whname','$Capacity'); ");

                                    if($res2){

                                        $res3 = mysqli_query($conn,"SELECT * FROM admins WHERE email = '$Email' AND password = '$Pass1' ");
                                        if (mysqli_num_rows($res3) == 1 ) {
                    
                    
                                            while($row = mysqli_fetch_assoc($res3)) {
                                            
                                                $_SESSION['id']    = $row["id"]; 
                                                $_SESSION['type']  = "admin"; 
                                                $_SESSION['fname'] = $row["fname"];
                                                $_SESSION['lname'] = $row["lname"];
                                                $_SESSION['email'] = $row["email"]; 
                                                $_SESSION["whname"]   = $row['whname'];
                                                $_SESSION["capacity"] = $row['Cpac'];
                                                unset($_SESSION["Msg"] );
                                            }

                                       
                            
                                        unset($_SESSION["Msg"] );
                                        header('location: ../PAGES/Admin/Home.php');


                                    }else{
                                        $_SESSION["Msg"] = "

                                        <div class='alert alert-danger' role='alert'>
                                         something went wrong error code SP1
                                        </div>
                                        
                                        " ;                                        header('location: ../PAGES/Signup.php');
                                    }
                                }else{
                                    $_SESSION["Msg"] = "

                                    <div class='alert alert-danger' role='alert'>
                                     something went wrong error code SP2
                                    </div>
                                    
                                    " ;                                    header('location: ../PAGES/Signup.php');
                                }
                }

    }else{
        $_SESSION["Msg"] = "

        <div class='alert alert-danger' role='alert'>
         something went wrong error code SP3
        </div>
        
        " ;
                header('location: ../PAGES/Signup.php');
    }

}else{
    $_SESSION["Msg"] = "

    <div class='alert alert-danger' role='alert'>
     password did not match
    </div>
    
    " ;
    header('location: ../PAGES/Signup.php');

}




?>