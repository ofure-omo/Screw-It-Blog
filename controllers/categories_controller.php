<?php

class CategoriesController {
    
    public function showAll(){
    // For show all
    
    $title = Categories::getAllTitles();
    $body = Categories::getAllBody();
    
    // OOP 
        $blog1 = new Categories();
        $position = 0;
        $blog1->title = $title[$position];
        $blog1->body = $body[$position];
        
        $blog2 = new Categories();
        $position = 1;
        $blog2->title = $title[$position];
        $blog2->body = $body[$position];
      
    // PROCEDURAL
        
        $catblog1 = $title[0];
        $catblog2 = $title[1];
    //print_r($results);
        
    // HTML
        $header = "Showing all blogs";
    
       

    
    require_once('views/pages/categories.php');
}

    // for specific search
    public function searchCategory(){
        
        // checks if get superglobal is one of the 3 valid categories (if not return error)
        
        $validCategories= ['create','decorate','renovate'];
        
        if (in_array(filter_input(INPUT_GET, "category",FILTER_SANITIZE_SPECIAL_CHARS),$validCategories)){
        
        $header =  "Welcome to the category search!";
                
        $category = filter_input(INPUT_GET, "category",FILTER_SANITIZE_SPECIAL_CHARS);
              
        require_once('views/pages/categories.php');    
            
        }
        
        // ERROR - IF NOT FOUND
        else {
            return call('pages', 'error');
        }
        
    }
}