<?php

class CommentsController {
    
   public function add() {
         
               Comments::addComment($_GET['blog_id']);
               require_once('views/blogpost/read.php'); 

   }
}

  