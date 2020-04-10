 <?php


class BlogController {
    public function readAll() {
      // we store all the posts in a variable
      $blogs = Blog::all();
      require_once('views/blogpost/readAll.php');
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['blog_id']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $blog = Blog::find($_GET['blog_id']);
      $tag = Blog::findTag($_GET['blog_id']); 
      require_once('views/blogpost/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    
    
    public function create() {

      //// we expect a url of form ?controller=blog&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          
          $tag = Blog::getTag();
          require_once('views/blogpost/create.php');  
      }
      else { 
            Blog::add(); //function for: insert into tags values (tag) where tag = :tag AND where blog_id = lastinserted blog_id
             
            //$blog= Blog::all(); //$products is used within the view
            //require_once('views/blogpost/readAll.php');  *SHOULD REDIRECT TO THE BLOGGER DASHBOARD WITH THE BLOG POST IN THE ACCORDIAN FOR BLOGS POSTED*
            
      }
      
    }
    
    
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['blog_id']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $blog = Blog::find($_GET['blog_id']);
      
        require_once('views/blogpost/update.php');
        }
      else
          { 
            $blog_id = $_GET['blog_id'];
            Blog::update($blog_id);
                        
            $blog = Blog::all();
            require_once('views/blogpost/readAll.php');
      }
      
    }
    public function delete() {
            Blog::remove($_GET['blog_id']);
           
            //$blog = Blog::all();
            //require_once('views/blogpost/readAll.php');
      }
      
    }
  
?>