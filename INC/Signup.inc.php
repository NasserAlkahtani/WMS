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
                                                $_SESSION["capacity"] = $row['cpacity'];
                                                unset($_SESSION['erorr']);
                                            }

                                       
                            
                                        unset($_SESSION['erorr']);
                                        header('location: ../PAGES/Admin/Home.php');


                                    }else{
                                        $_SESSION['erorr'] = "Something went worng try agian Error code(SP1)" ;
                                        header('location: ../PAGES/Signup.php');
                                    }
                                }else{
                                    $_SESSION['erorr'] = "Something went worng try agian Error code(SP2)" ;
                                    header('location: ../PAGES/Signup.php');
                                }
                }

    }else{
        $_SESSION['erorr'] = "Something went worng try agian Error code(SP3)" ;
        header('location: ../PAGES/Signup.php');
    }

}else{
    $_SESSION['erorr'] = "Passwords did not match" ;
    header('location: ../PAGES/Signup.php');

}




?>