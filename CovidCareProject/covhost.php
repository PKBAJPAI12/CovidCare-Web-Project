<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="getcov.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>CovidCare</title>
  </head>
  <body>
<?php
include '_header1.php';
?>

<div class="d-flex justify-content-center mx-3 my-5">
<div class="left">
<img src="covid-5064387_640.jpg" alt="" srcset="">
</div>
<div class="right">
<h1>Let's Stay Home & Fight Against Covid-19</h1>

</div>
</div>
<hr>



<div class="d-flex justify-content-center my-5">
<div class="col-md-3 ">
<div class="card border border-dark" id="card1">
  <div class="card-body">
    <h5 class="card-title text-center">Total Hospitals</h5>
    <h5 class="card-title text-center" id="th"></h5>
  </div>
</div>
</div>

<div class="col-md-3 ">
  <div class="card border border-dark" id="card2">
  <div class="card-body">
    <h5 class="card-title text-center ">Total Beds</h5>
    <h5 class="card-title text-center"  id="tb"></h5>
  </div>
  </div>
  </div>

  <div class="col-md-3 ">
  <div class="card border border-dark" id="card3">
  <div class="card-body">
    <h5 class="card-title text-center">Rural Hospitals</h5>
    <h5 class="card-title text-center" id="rh"></h5>
  </div>
</div>
</div>

<div class="col-md-3 ">
  <div class="card border border-dark" id="card1">
  <div class="card-body">
    <h5 class="card-title text-center">Urban Hospitals</h5>
    <h5 class="card-title text-center" id="uh"></h5>
  </div>
</div>
</div>

</div>


<hr>


<div class="statehelp my-5">
<!--
<form id="frm1" class="form-inline my-lg-0 justify-content-center">-->
<h4 id="frmh4">StateWise Hospitals & Beds Record</h4>    
<!--  
<input id="input" class="form-control mr-sm-2" type="search" placeholder="Search Your State" aria-label="Search" onkeyup="searchstatehelp()">
    </form>
-->

<table class="table table-striped border border-dark my-5" id="table1">
    <tr>
      <th class="table-info" scope="col">S.NO</th>
      <th class="table-info" scope="col">State Name</th>
      <th class="table-info" scope="col">Total Hospitals</th>
      <th class="table-info" scope="col">Total Beds</th>
    </tr>
  
</table>

</div>


<div class="footer">
<div class="footeri d-flex">

<div class="first">
<img src="COVID-Icon.png" alt="" srcset="">
</div>

<div class="second">
<div class="sfirst">
<h1>CovidCare</h1>
<p>Stay Home & Safe</p>
</div>
</div>

<div class="third">
<div class="social">
<img src="iconfinder_5296499_fb_facebook_facebook logo_icon.svg" alt="" srcset="">
<img src="iconfinder_834708_twitter_icon.svg" alt="" srcset="">
<img src="iconfinder_107178_circle_linkedin_icon.svg" alt="" srcset="">
<img src="iconfinder_6636566_instagram_social media_social network_icon.svg" alt="" srcset="">
</div>
</div>
</div>
<div class="copyright">
    <p><b>CovidHelp System</b> is Developed by Prateek Bajpai @ 2021</p>
</div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="cov.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>