<?php

class CommentController {
    
    public function add() {
        
        $comment = Comments::addComment();
        require_once('views/blogpost/read.php');
    }
}

