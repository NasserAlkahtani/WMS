<?php
include_once('db.inc.php');

session_start() ; 

$q = $_POST['q']; 
$output = " ";


$res1 = mysqli_query($conn,"SELECT * FROM employees WHERE uname LIKE '%$q%' OR name LIKE '%$q%' OR id = '$q' ");


if(mysqli_num_rows($res1) > 0){

    

    while($row = mysqli_fetch_assoc($res1)) {
      
      
    $output .='
        
         <tr>
          <th scope="row">'.$row["id"].'</th>
          <td>'.$row["name"].'</td>
          <td>@'.$row["uname"].'</td>
          <td><a href="EmpInfo.php?id='.$row["id"].'"><button type="button" class="btn btn-info">More</button></a> </td>
          </tr>
        ' ; 
    
      
    
        }

        echo $output;

}else if($q == ""){


    $fk_aid = $_SESSION['id'];


   $res = mysqli_query($conn,"SELECT * FROM employees  WHERE fk_aid = '$fk_aid' ");
   $output = "" ;

   if(mysqli_num_rows($res) > 0 ){
    
    while($row = mysqli_fetch_assoc($res)) {
      
      
        $output .='
        
         <tr>
          <th scope="row">'.$row["id"].'</th>
          <td>'.$row["name"].'</td>
          <td>@'.$row["uname"].'</td>
          <td><a href="EmpInfo.php?id='.$row["id"].'"><button type="button" class="btn btn-info">More</button></a> </td>
          </tr>
        ' ; 
  

    }
  }   
     

    echo $output;



}else{

    $output = "<h5> Employee not found </h5>";
    echo $output;
}



mysqli_close($conn);


?>