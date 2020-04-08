<body>     

    <nav class="navbar justify-content-between" id="navbar">
       <ul class="nav mr-auto">     
            <li>
                <a class="nav-link" href='?controller=register&action=registerUser'>SIGN UP</a>
            </li>
            <form class="form-inline">
                <button class="btn btn-outline-light" type="button" onclick="window.location.href = '?controller=login&action=login';" >Log in</button>
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
    <a href="?controller=home&action=home"><img src="views/images/screwit2.png" alt="Screw it"></a>
</div>

<nav class="navbar navbar-expand-lg flex-column flex-md-row d-flex sticky-top navbar-light" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">      
            <li class="nav-item">
                <a class="nav-link" href="?controller=home&action=home">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=pages&action=about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=pages&action=about">CREATE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=pages&action=about">DECORATE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=pages&action=about">RENOVATE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=blog&action=create">CREATE BLOG</a>
            </li>
        </ul>



        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
            <div class="overlay-content">
                <form action="?controller=search&action=search" method="POST">
                    <input type="text" placeholder="" name="search">
                    <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <ul class="navbar-nav ml-auto"> 
            <div class="openbtn" onclick="openSearch()">
                <i class="fa fa-search"></i>
            </div>

        </ul>
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


