<?php

class Blog {
    
    public $title;
    public $body;
    public $body2;
    public $date_posted;
   // public $tag;
    //private $main_image;
    //private $second_image;
    //private $third_image;
    public $category;
    //private $facebook_url;
    //private $insta_url;
    //private $twitter_url;

    function __construct($title, $body, $body2, $date_posted, $category)  {

        $this->title = $title;
        $this->body = $body;
        $this->body2 = $body2;
        $this->date_posted = $date_posted;
       // $this->main_image = $main_image;
        //$this->second_image = $second_image;
        //$this->third_image = $third_image;
        $this->category = $category;
        //$this->tag= $tag;
        //$this->facebook_url = $facebook_url;
        //$this->insta_url = $insta_url;
        //$this->twitter_url= $twitter_url;
    }

    public static function all() {
        $list = [];
        $db = Screw_it::getInstance();
        $req = $db->query('SELECT * FROM blog_posts; 
                          '); //order by most recent *ASK MARTINA*
        // we create a list of blog_post objects from the database results
        foreach ($req->fetch(PDO::FETCH_ASSOC) as $blog) {
            $list[] = new Blog($blog['username'], $blog['title'], $blog['body'], $blog['body2'], $blog['date_posted']);
                 
        }
        return $list;
    }

    public static function find($blog_id) {
        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);
        $req = $db->prepare ("SELECT * FROM blog_post WHERE blog_id = :blog_id;
                           ");
        //querey has been prepared replace :blog_id with actual value 

        $req->execute(array('blog_id' => $blog_id));
        $blog = $req->fetch(); 
        while($row = $req->fetch()){
                return $row['title'];
                $row['body'];
                $row ['body2'];
                $row['date_posted'];
                $row ['cat_id'];
        }
                
        if ($blog) {
            return new Blog($blog['username'], $blog['title'], $blog['body'], $blog['body2'], $blog['date_posted'], $blog['cat_id']);
        } else {
            throw new Exception('Blog not found, please search again');
        }
    }

    public static function add() {       
        
        $db = Screw_it::getInstance();       

       if (isset($_POST['submit'])) {
        
// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['body']) && $_POST['body'] != "") {
            $filteredBody = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['body2']) && $_POST['body2'] != "") {
            $filteredBody2 = filter_input(INPUT_POST, 'body2', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['category']) && $_POST['category'] != "") {
            $filteredCategory = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if (isset($_POST['tag']) && $_POST['tag'] !="") {
            $filteredTag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_STRING);
        }  
        $tag_split = explode(",", $filteredTag);
        
        if (isset($_POST['image']) && $_POST['image'] != "") {
            $filteredImage = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
           //for user_id once sessions is done it will need to be the session(user_id) that would go into the values for user_id!!
        $req = $db->prepare("INSERT INTO blog_posts(user_id, title, body, body2, image) VALUES ('10', :title, :body, :body2, :image);
                INSERT INTO tags (tag_id) VALUES (:tag)
                INNER JOIN blog_tags tags.tag_id = blog_tags.tag_id;
                INSERT INTO category (category) VALUES (:category);");
        $req->bindParam(':title', $title);
        $req->bindParam(':body', $body);
        $req->bindParam(':body2', $body2);
        $req->bindParam(':category', $category);
        $req->bindParam(':image', $image);
        $req->bindParam(':tag', $tag);

        $title = $filteredTitle;
        $body = $filteredBody;
        $body2 = $filteredBody2;
        $category = $filteredCategory;
        $image = $image;
        $tag = $tag_split;
        
        $req->execute();
           

//upload product image:  
        //Blog::uploadFiles($image);
        }
    
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myfile';


//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadFiles($image){
         $db = Screw_it::getInstance();
       
        $image = pathinfo($_FILES['myfile']['name'], PATHINFO_FILENAME);

       if (empty($_FILES[self::InputKey])) {
        //die("File Missing!");
            trigger_error("File Missing!");
       
        }

        /*if ($_FILES[self::InputKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
        }*/


        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }

        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "/Applications/XAMPP/xamppfiles/htdocs/Screw-it/views/images/";
        $destinationFile = $path . $image . '.jpeg';
        
        move_uploaded_file($_FILES[self::InputKey]['tmp_name'],$destinationFile);

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("File not uploaded");
        }
        
        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
            
    }
    
    
   
   public static function remove($blog_id) {
        $db = Screw_it::getInstance();
        //make sure $id is an integer
        $blog_id = intval($blog_id);
        $req = $db->prepare('delete FROM blog_posts WHERE blog_id = :blog_id');
        // the query was prepared, now replace :id with the actual $id value
        $req->execute(array('blog_id' => $blog_id));
    }

    /* function __construct(){
      $this->dbh = new PDO("mysql:dbname=Screw-It;host=localhost;", 'root', '');
      }

      function createNew(){
      $this->setByParams(-1,date("d.m.Y h:m", $user_id));
      }

      function createNewFromPOST(){

      }

      function getId(){
      return $this->id;
      }

      function getBlogId(){
      return $this->blog_id;
      }

      function getUserId(){
      return $this->user_id;
      }

      function getTitle() {
      return $this->title;
      }

      function getBody() {
      return $this->body;
      }

      function getDatePosted() {
      return $this->date_posted;
      }


      function getMainImg() {
      return $this->main_img;
      }

      function getSecondImg() {
      return $this->second_img;
      }

      function getThirdImg() {
      return $this->third_img;
      }

      function getCategory() {
      return $this->category;
      }

      function setId($id){
      $this->id = $id;
      }

      function setBlogId($blog_id){
      $this->blog_id = $blog_id;
      }

      function setUserId($user_id){
      $this->user_id=$user_id;
      }

      function setTitle($title) {
      $this->title = $title;
      }

      function setBody($body) {
      $this->body = $body;
      }

      function setDatePosted($date_posted) {
      $this->date_posted = $date_posted;
      }

      function setMainImg($main_img) {
      $this->main_img = $main_img;
      }

      function setSecondImg($second_img) {
      $this->second_img = $second_img;
      }

      function setThirdImg($third_img) {
      $this->third_img = $third_img;
      }

      function setCategory($category) {
      $this->category = $category;
      }

      function setByParams(){

      }

      function setByRow(){
      $this->setByParams(
      $row['blog_id'],
      $row['user_id'],
      $row['title'],
      $row['body'],
      $row['main_img'],
      $row['second_img'],
      $row['third_img'],
      $row['category'],
      );
      }

      function sqlInsertEntry(){

      }

      function sqlSelectEntryById($blog_id){

      }

      function sqlUpdateEntryById($blog_id){

      }

      private function validateString(){

      }

    private function is_valid_category($category) {
        $UpperCategory = ucfirst($category);
        $validCategory = array('Diy', 'Gardening', 'Decorating', 'Crafts', 'Crime', 'Up cycling furniture', 'Home', 'Before and after', 'Kids', 'Skincare');
        $valid = TRUE;

        if (in_array($UpperCategory, $validCategory)) {
            return $valid;
        } else {
            echo "Not a valid category!";
        }
    } */

}
