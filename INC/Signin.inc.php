<?php
include_once('db.inc.php');

session_start() ; 

$email = $_POST['email']; 
$pass = $_POST['pass'];



$res = mysqli_query($conn,"SELECT * FROM admins WHERE email = '$email' AND password = '$pass' ");
$res1 = mysqli_query($conn,"SELECT * FROM employees WHERE uname = '$email' AND password = '$pass' ");



if (mysqli_num_rows($res) == 1 ) {
    
    
    while($row = mysqli_fetch_assoc($res)) {
     
    
    $_SESSION['id']    = $row["id"]; 
    $_SESSION['type']  = "admin"; 
    $_SESSION['fname'] = $row["fname"];
    $_SESSION['lname'] = $row["lname"];
    $_SESSION['email'] = $row["email"]; 
    $_SESSION["whname"]   = $row['whname'];
    $_SESSION["capacity"] = (int)$row['Cpac'];


    unset($_SESSION['erorr']);

    }

    
    mysqli_close($conn);
    header('location: ../PAGES/Admin/Home.php');

}else if(mysqli_num_rows($res1) == 1){

    

    
        while($row = mysqli_fetch_assoc($res1)) {
         
        
        $_SESSION['id'] = $row["id"]; 
        $_SESSION['Type'] = "Employee" ; 
        $_SESSION['fk_aid'] = $row["fk_aid"];
        $_SESSION['name'] = $row['name'];
        $_SESSION['uname'] = $row['uname'];
    
        unset($_SESSION['erorr']);
    
        }
    
        mysqli_close($conn);
        header('location: ../PAGES/Employee/Home.php');
}else{

    $_SESSION['erorr'] = "worng user name or password" ;
    header('location: ../PAGES/Signin.php');

}



mysqli_close($conn);


?>