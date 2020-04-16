<?php

Class modController {
    
public function showAll(){

    if(isset($_SESSION['user_id'])) {   
        
        //S T A T S
        
        $commsCount = Mod::commentsCount();
        $blogsCount = Mod::blogsCount();
        $memCount = Mod::memberCount();
        $bloggerCount = Mod::bloggerCount();
        $likesCount = Mod::likesCount();
        $repliesCount = Mod::repliesCount();
        //print_r($bloggerCount);

            
        // Gets the member details
            
            $details = Mod::getDetails(($_SESSION['user_id']));
            

            
        // Gets the member details    
            
            $favourites = Mod::getFavourites(($_SESSION['user_id']));
             
            
        // Gets the comments details
            
            $comms = Mod::getComments10();
        
        // Functions
        function deleteComment($commentID){
            Mod::deleteComment($commentID);
        }
            
            
            require_once('views/pages/mod_page.php');

    } 
    
    else {
        return call('pages', 'error');
    }
    
    
}
}
