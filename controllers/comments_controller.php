<?php

class CommentsController {
    
   public function add() {
         if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_SESSION['loggedin'])) {
//             echo $_REQUEST['comment'];
               Comments::addComment($_GET['blog_id']);

         }

   }
   
    public function post() {
        
        if (isset($_GET['blog_id'])) {

        try {
            // we use the given id to get the correct post
             Comments::postComment($_GET['blog_id']);
           // require_once('views/blogpost/read.php');
            
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
               
         }

   }
}


  