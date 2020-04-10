
<nav class="navbar justify-content-between" id="navbar">
        <ul class="nav mr-auto">     
            <li>
                <a class="nav-link" href='?controller=register&action=registerUser'>SIGN UP</a>
            </li>
            <form class="form-inline">
                <button class="btn btn-outline-light" type="button" onclick="window.location.href='?controller=login&action=loginUser'">Log in</button>
            </form>
        </ul>
        <ul class="nav ml-auto">  
            <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://pintrest.com/"><i class="fa fa-pinterest"></i></a></li>
        </ul>
</nav>
<div class="header">
    <a href="?controller=home&action=home"><img src="views/images/screwit3.png" alt="Screw it"></a>
</div>

<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mx-auto">      
            <li class="nav-item">
                <a class="nav-link" href="?controller=home&action=home">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=pages&action=about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=categories&action=searchCategory&category=create">CREATE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=categories&action=searchCategory&category=decorate">DECORATE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=categories&action=searchCategory&category=renovate">RENOVATE</a>
            </li>
            &nbsp;&nbsp;
            <li onclick="openSearch()"> 
                <i class="fa search-fa fa-search"></i>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <a class="nav-link" href="?controller=blog&action=create">post blog</a>
            </li>
        </ul>



        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
            <div class="overlay-content">
                <form action="?controller=search&action=search" method="POST">
                    <input type="text" placeholder="" name="search" required >
                    <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
                </form>
            </div>

      
</nav>

</div>


<script>
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
