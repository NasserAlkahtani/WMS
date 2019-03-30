<?php
include_once('db.inc.php');

session_start() ; 

$q = $_POST['q']; 
$fk_eid = $_SESSION['eid'];
$fk_aid = $_SESSION['id'];
$output = " ";




if($q != ""){

 

           $res = mysqli_query($conn,"SELECT * FROM trans WHERE fk_eid = '$fk_eid' AND fk_iid LIKE '%$q%' OR iname LIKE '%$q%' OR time LIKE '%$q%' ORDER BY time DESC");

             
    if(mysqli_num_rows($res) > 0 ){
     

        while($row = mysqli_fetch_assoc($res)) {
      
        
   
            $Type = "Undefined";
            if($row["type"] == "I"){
              $Type = "INCREASE" ;
            }else if($row["type"] == "D"){
              $Type = "DECREASE" ;
   
            }
        echo   '
        
         <tr>
          <th scope="row">'.$row["fk_iid"].'</th>
          <td>'.$row["iname"].'</td>
          <td>'.$Type.'</td>
          <td>'.$row["qty"].'</td>
          <td>'.$row["time"].'</td>
   
   
          </tr>
        ' ; 
    
   
    
        }
   
      }   
    
    

    



     


}else if($q == ""){


    $res = mysqli_query($conn,"SELECT * FROM trans WHERE fk_eid = '$fk_eid' ORDER BY time DESC");
  
     
    if(mysqli_num_rows($res) > 0 ){
     



       while($row = mysqli_fetch_assoc($res)) {

         $Type = "Undefined";
         if($row["type"] == "I"){
           $Type = "INCREASE" ;
         }else if($row["type"] == "D"){
           $Type = "DECREASE" ;

         }

     echo   '
     
      <tr>
       <th scope="row">'.$row["fk_iid"].'</th>
       <td>'.$row["iname"].'</td>
       <td>'.$Type.'</td>
       <td>'.$row["qty"].'</td>
       <td>'.$row["time"].'</td>
       </tr>
     ' ; 
 

 
     }

   }   
 
 


}else{



   
    $output = "<h5 style='postion:relative;width:100%;margin:30px;font-size:50px;text-align:center;'> Record not found </h5>";
    echo $output;
}



?>