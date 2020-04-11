
<nav class="navbar justify-content-between" id="navbar" id="navbarNavDropdown">
        <ul class="nav mr-auto">     
            <li>
                <a class="nav-link" href='?controller=register&action=registerUser'>SIGN UP</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="?controller=blog&action=create">Post blog</a>
            </li>
            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Members Area
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                           // display menu options if user is not logged in
                            if (!isset($_SESSION["loggedin"])){  
                                echo '<a class="nav-link" href="?controller=register&action=registerUser" style="font-size: 16px;">Sign up</a>';
                                echo '<a class="nav-link" href="?controller=login&action=loginUser" style="font-size: 16px;">Log in</a>';
                            }  
                            // only display menu options if user is logged in
                            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {                            
                                echo '<a class="nav-link" href="?controller=signout&action=signout" style="font-size: 16px;">Log out</a>';
                                echo '<a class="nav-link" href="?controller=dashboard&action=read" style="font-size: 16px;">Your dashboard</a>';
                                }
                            ?>
                        </div>
                    </li>
        </ul>
        <ul class="nav ml-auto">  
            <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://pintrest.com/"><i class="fa fa-pinterest"></i></a></li>
            <li><a><i onclick="openSearch()" class="fa searchfa fa-search"></i></a></li>
        </ul>
</nav>
<div class="header">
    <a href="?controller=home&action=home"><img src="views/images/screwit3.png" alt="Screw it"></a>
</div>
<div class='sticky'>
<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-4">
                <a class="nav-link" href="?controller=home&action=home">HOME</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link <?php if (!isset($_GET['controller=blogger&action=about'])){
                echo "active";} ?>" href="?controller=blogger&action=about">ABOUT</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link" href="?controller=categories&action=searchCategory&category=create">CREATE</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link" href="?controller=categories&action=searchCategory&category=decorate">DECORATE</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link" href="?controller=categories&action=searchCategory&category=renovate">RENOVATE</a>
            </li>
<<<<<<< HEAD
                        <li class="nav-item">
                <a class="nav-link" href="?controller=dashboard&action=mem_details">dashboard</a>
            </li>
                        &nbsp;&nbsp;
            <li onclick="openSearch()"> 
                <i class="fa search-fa fa-search"></i>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <a class="nav-link" href="?controller=blog&action=create">post blog</a>
            </li>
        </ul>
=======
    </ul>
>>>>>>> 4b9a14690d1d4054744ea5429c498678f142216f
  </div>
      
</nav>
</div>

        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
            <div class="overlay-content">
                <form action="?controller=search&action=search" method="POST">
                    <input type="text" placeholder="" name="search" required >
                    <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
                </form>
            </div>

</div>


<script>
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>