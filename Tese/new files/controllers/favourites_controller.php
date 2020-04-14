<?php

class favouritesController{
    
    public function checkfav() {
        
        favourties::getFavourites($_POST['blog_id']);
    }
    
}

