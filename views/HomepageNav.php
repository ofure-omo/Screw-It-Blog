<!DOCTYPE html>
<html lang="en">
<!-- Below is the head -->  
<head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/css/stylesHome.css">
    <link rel="stylesheet" href="views/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

</head>
<style>
p {
    font-family: 'Open Sans', sans-serif;
    }

ul {
    /*overflow: auto;*/
    font-family: 'Francois One', sans-serif;
}
 
ul li {
    list-style-type: none;
    /*float: left;*/
}
ul li a:hover {
    opacity: .7;
}
 
ul li a i {
    background: #3F7CAC;
    color: #70D6FF;
    width: 35px;
    /*height: -20px;*/
   /*border-radius: 20px;*/
    /*font-size: 70px;
    /*text-align: center;*/
    /*margin-right: 10px;*/
    /*padding-top: 50%
    /*transition: all 0.2s ease-in-out;*/
}
ul li a i:hover {
    opacity: .7;
}

/* Style the navbar */
#navbar {
  /*overflow: hidden;*/
  background-color: #3F7CAC;
}

/* Navbar links */
#navbar a {
  float: left;
  /*display: block;*/
  color: #70D6FF;
  /*text-align: center;*/
  /*padding: 14px; - increases height of the nav */
  /*text-decoration: none;*/
}

/* Page content 
.content {
  padding: 16px;
}*/

/* The sticky class is added to the navbar with JS when it reaches its scroll position
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0)
.sticky + .content {
  padding-top: 60px;
}*/

.nav-item {
        font-size: 25px;
}

.form-inline {
    /* style for the search box here */
}

.navbar-toggler {
    background-color: #FFFFFF; 
}

img {max-width:100%}

.header {
    text-align: center;
}

* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #FCB078;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #70D6FF;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

i.fa {
    font-size: 20px;
}





/* The overlay effect with black background */
.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9); /* Black with a little bit see-through */
}

/* The content */
.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

/* Close button */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

/* Style the search field */
.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

/* Style the submit button */
.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
</style>
</head>
    <!-- Stylesheet internal
    <link rel="stylesheet" type="text/css" href="BlogStyles.css">-->
    
<!-- NAVIGATION -->
<body>     
  
    <nav class="navbar justify-content-between" id="navbar">
        <ul class="nav mr-auto">     
            <li>
                <a class="nav-link" href='?controller=product&action=readAll'>SIGN UP</a>
            </li>
            <form class="form-inline">
                <button class="btn btn-outline-light" type="button" onclick="window.location.href = 'Screw-it/Login.php';" >Log in</button>
            </form>
        </ul>
        <ul class="nav ml-auto">  
            <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://pintrest.com/"><i class="fa fa-pinterest"></i></a></li>
        </ul>

    </div>
    </nav>
<div class="header">
  <img src="views/images/screwit2.png" alt="Screw it">
</div>
    
<nav class="navbar navbar-expand-lg flex-column flex-md-row d-flex sticky-top navbar-light" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">      
            <li class="nav-item">
                <a class="nav-link" href="Home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About.php">ABOUT</>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CATEGORIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">KITCHEN</a>
                    <a class="dropdown-item" href="#">DINING ROOM </a>
                    <a class="dropdown-item" href="#">LIVING ROOM</a>
                    <a class="dropdown-item" href="#">BEDROOM</a>
                    <a class="dropdown-item" href="#">OFFICE</a>
                    <a class="dropdown-item" href="#">GARDEN </a>
                    <a class="dropdown-item" href="#">LIFESTYLE </a>
                </div>
            </li></ul>

    <div class="nav-centered">
        <form class="example" action="action_page.php">
             <input type="text" placeholder="" name="search">
             <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
            
            
    <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
        <div class="overlay-content">
            <form action="action_page.php">
                <input type="text" placeholder="" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
            <button class="openBtn" onclick="openSearch()">Open Search Box</button>
        </div>
</nav>

  <!-- Required meta tags 
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
-->



</div>
<div class="content">
    <?php require_once('routes.php'); ?>
    
</div>


<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



<?php
include_once "views/pages/Footer.php";
?>

<!--End-->
</html>	
