<?php

/*class SearchController extends Search {
    
    public function performSearch($usersearch) {
       $this->getSearch($usersearch);
    }
 */

class SearchController {

    
   public function search() {
      // we expect a url of form ?controller=search&action=&searchterm
      // without an entry we just redirect to the error page as we need the entry to find it in the database
      if (!isset($_POST['submit-search']))
        return call('pages', 'error');

      try{
      // we use the given entry to get the correct post
      $results = Search::runSearch($_POST['search']);
      require_once('views/Search/SearchResults.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    
}
    
/*
   public function search1(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if (!isset($_GET['searchterm']))
        return call('pages', 'error');
        
        $searchterm = Search::find($_GET['searchterm']);
        
        require_once('views/search/SearchResults.php');
}
   }

}
// goes and updates info in the db - insert/update etc
// Can run more than one method 
// runs models and views


public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['blog_id']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $blog = Blog::find($_GET['blog_id']);
      require_once('views/blogpost/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }*/