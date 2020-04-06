<?php

class HomeController {

   public function home() {

    
       $blog1text = BlogHP::getLatestBlogText();
       $blog1title = BlogHP::getLatestBlogTitle();
       $url = "'".BlogHP::getLatestBlogImage()."'";
        require_once('views/pages/home.php');

 }
    }

    
