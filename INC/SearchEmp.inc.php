<?php
include_once('db.inc.php');

session_start() ; 

$q = $_POST['q']; 
$fk_aid = $_SESSION["id"];
$output = " ";


$res1 = mysqli_query($conn,"SELECT * FROM employees WHERE  uname LIKE '%$q%' AND fk_aid = '$fk_aid' OR name LIKE '%$q%'AND fk_aid = '$fk_aid'  OR id LIKE '%$q%' AND fk_aid = '$fk_aid'  ");

if($q != ""){

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
        mysqli_close($conn);

        echo $output;
      }else{

        $output = "<h5 style='postion:relative;width:100%;margin:30px;font-size:50px;text-align:center;'> Employee not found </h5>";
        mysqli_close($conn);

        echo $output;

      }


}else if($q == ""){




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
     
  mysqli_close($conn);

    echo $output;



}





?>