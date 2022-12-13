<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    
    <div class="container">
    <h1 class="text-danger">Welcome <?=$this->session->userdata('auth')->username; ?> 
    <h2><?=$this->session->flashdata('msg'); ?></h2> 
</h1>

   
<section id="sidebar">
<div class="white-label">
</div>
<div id="sidebar-nav">
<ul>
<li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
<li><a href="<?php echo base_url('home/logout')?>"><i class="fa fa-desktop"></i>Logout</a></li>
<!-- <li><a href="#"><i class="fa fa-usd"></i> Ecommerce</a></li>
<li><a href="#"><i class="fa fa-pencil-square-o"></i> My Blog</a></li>
<li><a href="#"><i class="fa fa-sitemap"></i> SEO Tools</a></li>
<li><a href="#"><i class="fa fa-line-chart"></i> Reporting</a></li>
<li><a href="#"><i class="fa fa-comments-o"></i>Social Marketing</a></li>
<li><a href="#"><i class="fa fa-map-marker"></i> Get Traffic</a></li>
<li><a href="#"><i class="fa fa-users"></i> Employees</a></li>
<li><a href="#"><i class="fa fa-calendar-o"></i> Reservations</a></li>
<li><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li> -->
</ul>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
<script>  
$(document).ready (function () {  
  $("#basic-form").validate ();  
});  
</script> 
</body>
</html>