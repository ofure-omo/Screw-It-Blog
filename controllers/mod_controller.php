<?php

Class modController {
    
public function showAll(){

    if(isset($_SESSION['user_id'])) {   
        
        //S T A T S
        
        $commsCount = Mod::commentsCount();
        $blogsCount = Mod::blogsCount();
        $memCount = Mod::memberCount();
        //print_r($commsCount);
            
        // Gets the member details
            
            $details = Mod::getDetails(($_SESSION['user_id']));
            

            
        // Gets the member details    
            
            $favourites = Mod::getFavourites(($_SESSION['user_id']));
             
            
        // Gets the comments details
            
            $comms = Mod::getComments10();
            
            
            require_once('views/pages/mod_page.php');

    } 
    
    else {
        return call('pages', 'error');
    }
    
    
}
}
