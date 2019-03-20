
<!doctype html>
<?php
     session_start();
     include_once('../../INC/db.inc.php');
     if(!isset($_SESSION['id'])){
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


    <!-- Bootstrap core CSS -->
<link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

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
    <link href="../../STYLES/Myaccount.css" rel="stylesheet">
    <link href="../../STYLES/GLOBAL.css" rel="stylesheet">

  </head>
  <body>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="Home.php"><?php   echo $_SESSION['whname']; ?></a>

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
            <a style="color:white;" class="nav-link" href="Home.php">
              <img src="../../images/icons/dashboard.png" class="icon">Dashboard 
            </a>
          </li>
          <li class="nav-item NAV_ITEM SELECTED">
            <a class="nav-link" href="Employees.php">
            <img src="../../images/icons/group.png" class="icon">Employees
            </a>
          </li>
          <li class="nav-item NAV_ITEM">
            <a class="nav-link" href="CreateEmployee.php">
            <img src="../../images/icons/new-user.png" class="icon">Create Employee
            </a>
          </li>
          <li class="nav-item NAV_ITEM">
            <a class="nav-link" href="Items.php">
            <img src="../../images/icons/items.png" class="icon">Items
            </a>
          </li>
          <li class="nav-item NAV_ITEM">
            <a class="nav-link" href="CreateItem.php">
            <img src="../../images/icons/plus.png" class="icon">Create Item
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
        <h1 class="h2">Employee information
        
        </h1>
      </div>

      <?php 
     

     if(isset($_SESSION['Msg'])){
      if($_SESSION['Msg'] != "" ){
 
       echo $_SESSION['Msg'] ; 
 
       $_SESSION["Msg"] = "";
 
      }
     }
      

     
     ?>
   
   
   <?php
   
   $emId = $_GET['id'];
   $name = ""; 
   $uname = "" ; 
   $pass = "" ; 

   $res = mysqli_query($conn,"SELECT * FROM employees  WHERE id = '$emId' ");

   while($row = mysqli_fetch_assoc($res)) {
    
    $name = $row['name']; 
    $uname =  $row['uname'];
    $pass = $row['password'];

  }

   


   
   
   ?>


    <div class="LESSITEMS_CARD card bg-dark box_shadow">


<img class="Img" src="../../images/icons/account1.png">
<h1 class="Name"> <?php echo $name ?> </h1>
<h6 class="Atype">Accout Type : employee </h6>


<form action="../../INC/updateEmp.inc.php" method="post" class="FORM">
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">ID</label>
<input  <?php echo "value=".$emId?> type="email" readonly  class="form-control box_shadow" id="inputEmail4" placeholder="" name="id">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">Name</label>
<input <?php echo "value=".$name?>  type="text" class="form-control box_shadow" id="inputPassword4" placeholder=""  name="name">
</div>

</div>

<div class="form-group">
<label for="inputAddress">User Name</label>
<input <?php echo "value=".$uname?> type="text" class="form-control box_shadow" id="inputAddress" placeholder="" name = "uname" >
</div>

<div class="form-group">
<label for="inputAddress2">Password</label>
<input <?php echo "value=".$pass?> type="text" class="form-control box_shadow" id="inputAddress2" placeholder=""  name="pass" >
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputCity"></label>
<input style="display:none" type="text" class="form-control box_shadow" id="inputCity">
<a class="BTNupdate btn btn-danger box_shadow"<?php
echo 'href="../../INC/DeleteEmp.inc.php?id='.$emId.'"';

 ?>
>Delete Accout</a></div>

<div class="form-group col-md-4">
<label for="inputCity"></label>
<input style="display:none" type="number" class="form-control box_shadow" id="inputCity">
</div>


<div class="form-group col-md-2">
<input type="submit" value="update" class="form-control box_shadow btn btn-info" id="inputZip">
</div>

</div>
<div class="form-group">
<div class="form-check">

</label>
</div>
</div>
</form>

</div>
      
     


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
