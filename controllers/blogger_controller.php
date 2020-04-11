<?php

class BloggerController {

    
   public function about() {

      $bloggers = Blogger::getBloggerprofiles();
      require_once('views/pages/about.php');

 }
    }
    
    
  