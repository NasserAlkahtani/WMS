
<!doctype html>
<?php
     session_start();
     
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
          <li class="nav-item NAV_ITEM SELECTED">
            <a style="color:white;"class="nav-link" href="Home.php">
              <img src="../../images/icons/dashboard.png" class="icon">Dashboard 
            </a>
          </li>
        
        
          <li class="nav-item NAV_ITEM">
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
        <h1 class="h2">Dashboard</h1>
    
      </div>

<div style="color: rgb(8, 143, 64);" class="WHCAPACITY_CARD card bg-dark box_shadow">

Wharehouse cpacity

<div class="progress PROGRESS_BAR">
   <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

</div>

<div style="color: rgb(68, 166, 223);"class="WHCAPACITY_CARD card bg-dark box_shadow">

Number of transaction

<div class="NUM_EMPLOYEES">90</div>


</div>

<div style="color: rgb(255, 174, 0);"class="WHCAPACITY_CARD card bg-dark box_shadow">

Number of items

<div class="NUM_ITEMS">15,538</div>

</div>

<div class="TOPITEMS_CARD card bg-dark box_shadow">

Top 3 items in terms of Qty

<table style="margin-top:10px;font-size:15px;"class="table table-dark box_shadow">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Item Name</th>
      <th scope="col">Qty</th>
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody>
   
  
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="Home.php"><button type="button" class="btn btn-info">More</button></a> </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="Home.php"><button type="button" class="btn btn-info">More</button></a> </td>
    </tr> <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="Home.php"><button type="button" class="btn btn-info">More</button></a> </td>
    </tr>
   
  </tbody>
</table>

    </div>


    <div class="LESSITEMS_CARD card bg-dark box_shadow">

Items with Qty less than 10 

<table style="margin-top:10px;font-size:15px;"class="table table-dark box_shadow">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Item Name</th>
      <th scope="col">Qty</th>
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody>
   
  
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="Home.php"><button type="button" class="btn btn-info">More</button></a> </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="Home.php"><button type="button" class="btn btn-info">More</button></a> </td>
    </tr> <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="Home.php"><button type="button" class="btn btn-info">More</button></a> </td>
    </tr>
   
  </tbody>
</table>

    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
