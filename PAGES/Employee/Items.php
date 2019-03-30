
<!doctype html>
<?php
     session_start();
     include_once('../../INC/db.inc.php');

     if(!isset($_SESSION['eid'])){
      header('location: Signin.php');
     }
  ?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>WMS</title>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../../STYLES/Home.css" rel="stylesheet">
    <link href="../../STYLES/GLOBAL.css" rel="stylesheet">

  </head>
  <body>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="Home.php"><?php   echo "@".$_SESSION['uname']; ?></a>

<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
<ul class="navbar-nav px-3">
  <li class="nav-item text-nowrap">
    <a class="nav-link Signout" href="../../INC/Signout.inc.php">Sign out</a>
  </li>
</ul>
</nav>

<div class="container-fluid">
<div class="row">
  <nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
      <li class="nav-item NAV_ITEM">
          <a style="color:white;"class="nav-link" href="Trans.php">
            <img src="../../images/icons/dashboard.png" class="icon">My transactions  
          </a>
        </li>
      
      
        <li class="nav-item NAV_ITEM SELECTED">
          <a class="nav-link" href="Items.php">
          <img src="../../images/icons/items.png" class="icon">Items
          </a>
        </li>
      
    
        <li class="nav-item NAV_ITEM">
          <a class="nav-link" href="Myaccount.php">
            <img src="../../images/icons/account.png" class="icon">My Account 
          </a>
        </li>
      </ul>



    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Items</h1>
      </div>

      <?php 
     

     if(isset($_SESSION['Msg'])){
      if($_SESSION['Msg'] != "" ){
 
       echo $_SESSION['Msg'] ; 
 
       $_SESSION["Msg"] = "";
 
      }
     }
      

     
     ?>


      <form class="">
      <input id="SEA-INPUT"class="form-control form-control-dark w-100 SEARCH_BAR" type="text" placeholder="Search" aria-label="Search">
      <button type="button" class="SEABTN btn btn-info">Search</button>
     </form>


          
      <table class="table table-dark box_shadow">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Item Name</th>
      <th scope="col">Qty</th>
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody id="RES-BODY">
   
  
  <?php 
     
     $fk_aid = $_SESSION['id'];
  
  
     $res = mysqli_query($conn,"SELECT * FROM items  WHERE fk_aid = '$fk_aid' ");
  

     


   if(mysqli_num_rows($res) > 0 ){
    
    while($row = mysqli_fetch_assoc($res)) {
      
      
    echo   '
    
     <tr>
      <th scope="row">'.$row["id"].'</th>
      <td>'.$row["name"].'</td>
      <td>'.$row["qty"].'</td>
      <td><a href="ItemInfo.php?id='.$row["id"].'"><button type="button" class="btn btn-info">More</button></a> </td>
      </tr>
    ' ; 

  

    }
  }   
     
     
     ?>
    
  </tbody>
</table>


<?php


if(mysqli_num_rows($res) == 0 ){

  echo "<h1 style='position: relative;
  width: 100%;
  top: 100%;
  font-size: 50px;
  text-align: center; '>You have no Items !</h1>";
}



?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$( document ).ready(function() {


  $("#SEA-INPUT").keyup(function(){

    var txt = $(this).val();

    
    

      $.ajax({
          url : "../../INC/SearchItem.inc.php",
          method: "POST" ,
          data:{q:txt},
          success:function(data){
            $("#RES-BODY").html(data);
          }
      });
   
  });



  });



  </script>

</body>
</html>
