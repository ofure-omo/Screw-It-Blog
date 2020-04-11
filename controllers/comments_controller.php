<?php

class CommentController {
    
    public function add() {
        
        if (isset($_SESSION["loggedin"])) { //check if a session is set if it is then they can add a comment if not link link to error 
        
           try { $comment = Comments::addComment();
        require_once('views/blogpost/read.php');
    } catch (Exception $ex) {
        
        return call('pages','error');
    }
}
}
    }

