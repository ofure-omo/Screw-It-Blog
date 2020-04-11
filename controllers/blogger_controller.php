<?php

class BloggerController {

    
   public function about() {

      $bloggers = Blogger::getallBloggerprofiles();
      require_once('views/pages/about.php');

 }
          

    public function dashboard() {
        if(isset($_SESSION['user_id'])) {
      
            $blogger = Blogger::getProfile(($_SESSION['user_id']));
            $blogs = Blogger::getCountBlogs(($_SESSION['user_id']));
            require_once('views/pages/Bloggerdashboard.php');

    } else { return call('pages', 'error');
        
    }
}
}

/*    
   public function bloggerdashboard() {
        require_once('views/pages/Bloggerdashboard.php');
        $usn = $_SESSION['username'];
        $blogger = User::getUser($usn);
        return $blogger;
    }

}*/
  