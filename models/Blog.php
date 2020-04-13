<?php

class Blog {

    public $title;
    public $body;
    public $body2;
    public $date_posted;
    //public $tag;
    public $main_image;
    public $second_image;
    public $third_image;
    public $category;
    public $facebook_url;
    public $insta_url;
    public $twitter_url;

    function __construct($title, $body, $body2, $date_posted, $category, $main_image, $second_image, $third_image, $facebook_url, $insta_url, $twitter_url) {

        $this->title = $title;
        $this->body = $body;
        $this->body2 = $body2;
        $this->date_posted = $date_posted;
        $this->main_image = $main_image;
        $this->second_image = $second_image;
        $this->third_image = $third_image;
        $this->category = $category;
        //$this->tag= $tag;
        $this->facebook_url = $facebook_url;
        $this->insta_url = $insta_url;
        $this->twitter_url = $twitter_url;
    }
    

    public static function all() {
        $list = [];
        $db = Screw_it::getInstance();
        $req = $db->query("SELECT * FROM blog_posts; 
                          INNER JOIN Users ON blog_posts.user_id = Users.user_id WHERE blog_id = :blog_id;"); //order by most recent *ASK MARTINA*
        // we create a list of blog_post objects from the database results
        foreach ($req->fetch(PDO::FETCH_ASSOC) as $blog) {
            $list[] = new Blog($blog['user_id'], $blog['title'], $blog['body'], $blog['date_posted'], $blog['category'], $blog['main_image'], $blog['second_image'], $blog['third_image'], $blog['views'], $blog['slug'], $blog['favourite']);
        }
        return $list;
    }

    public static function find($blog_id) {

        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);
        $req = $db->prepare('SELECT * FROM blog_posts
                             INNER JOIN Users ON blog_posts.user_id = Users.user_id WHERE blog_id = :blog_id;'); //get blog_posts and information from users table to assign first and last name


        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('blog_id' => $blog_id));
        $blog = $req->fetch();

        return $blog;
    }

    public function findTag($blog_id) {
        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);
        $req = $db->prepare('SELECT * FROM blog_tags 
                             WHERE blog_id = :blog_id;');

        /* while ($row = $req->fetchAll) {
          $tag = $row['tag'];
          echo $tag;
          } */
        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('blog_id' => $blog_id));
        $tag = $req->fetchAll(PDO::FETCH_COLUMN, 1);

        return $tag;
    }

    public function getTag() {
        $db = Screw_it::getInstance();

        $req = $db->query("SELECT * FROM tags;")->fetchAll(PDO::FETCH_COLUMN); //get tags
        $tag = $req;
        return $tag;
    }

    public static function update($blog_id) {
        $db = Screw_it::getInstance(); 
        
        $blog_id = intval($blog_id);
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
    
        
        $req = $db->prepare("Update blog_posts set title=:title, body=:body, body2=:body2, category=:category where blog_id= '".$blog_id."';");
        
        
        $req->bindParam(':title', $title);
        $req->bindParam(':body', $body);
        $req->bindParam(':body2', $body2);
        $req->bindParam(':category', $category);
       
        $title = $filteredTitle;
        $body = $filteredBody;
        $body2 = $filteredBody2;
        $category = $filteredCategory;

        $req->execute();
        
        if(isset($_POST['tag'])) {
            $filteredTag = $_POST['tag'];
        $newtag = $filteredTag;
        foreach ($newtag as $key => $tags) {
            $tag2 = $tags;

            $req = $db->prepare("UPDATE blog_tags set tag=:tag WHERE blog_id = '".$blog_id."');");
            $req->bindParam('tag', $tag);
            $tag = $tag2; //tags doesnt work, how to check if tag already in db and if input tag not == to db tag then delete 
            $req->execute();
        }
    } else { echo ""; }
//upload product image if it exists
        /*if (!empty($_FILES[self::InputKey]['name'])) {
            Product::uploadFile($name);
        }*/
    echo "<script type='text/javascript'>location.href = '?controller=blogger&action=dashboard';</script>";
    }
    
    
    public static function add() {

        $db = Screw_it::getInstance();

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

        //$explodetag = explode('# ', $newtag);
        //echo $explodetag;

        /* if (isset($_FILES["myfile"]["tmp_name"][2])) {
          echo"";
          } else {
          die("Please upload 3 images<br>");
          }
          /* if (empty($_FILES["myfile"]["tmp_name"])) {
          //die("File Missing!");
          die ("File Missing! <br>");
          } else {
          echo "";
          } */

        $filteredImage = filter_input(INPUT_POST, 'myfile[]', FILTER_SANITIZE_SPECIAL_CHARS);

        //$filteredImage = $_FILES['myfile']['name'];
        foreach ($_FILES["myfile"]["tmp_name"] as $key => $tmp_name) {

            $temp = $_FILES["myfile"]["tmp_name"][$key];
            $imagename = $_FILES["myfile"]["name"][$key];   //save this in the db!!

            $img1 = $_FILES["myfile"]["name"][0];
            $img2 = $_FILES["myfile"]["name"][1];
            $img3 = $_FILES["myfile"]["name"][2];
        }
        $location = "views/images/";
        //creates a file path for each image uploaded
        $file_path1 = $location . $img1;
        $file_path2 = $location . $img2;
        $file_path3 = $location . $img3;
        //insert exploded tags into the tags table 
        //foreach ($Tag as $key => $newtag) {
        //$explodeTag = $newtag;
        //for user_id once sessions is done it will need to be the session(user_id) that would go into the values for user_id!!
        $req = $db->prepare("INSERT INTO blog_posts(user_id, title, body, body2, category, main_image, second_image, third_image) 
                                VALUES ('".$_SESSION['user_id']."', :title, :body, :body2, :category, :main_image, :second_image, :third_image);
                               ");

        $req->bindParam(':title', $title);
        $req->bindParam(':body', $body);
        $req->bindParam(':body2', $body2);
        $req->bindParam(':category', $category);
        $req->bindParam(':main_image', $main_image);
        $req->bindParam(':second_image', $second_image);
        $req->bindParam(':third_image', $third_image);

        $title = $filteredTitle;
        $body = $filteredBody;
        $body2 = $filteredBody2;
        $category = $filteredCategory;
        $main_image = $file_path1;
        $second_image = $file_path2;
        $third_image = $file_path3;

        $req->execute();
        $id = $db->lastInsertId();
        
//         if (isset($_POST['tag']) && $_POST['tag'] !== "") {
           if(empty($_POST['tag'])){ 
               echo"";
           } else {
           $filteredTag = $_POST['tag'];
        
           $newtag = $filteredTag;
            

        foreach ($newtag as $key => $tags) {
            $tag2 = $tags;

            $req = $db->prepare("INSERT INTO blog_tags(blog_id, tag) VALUES (:blog_id, :tag);");

            $req->bindParam('tag', $tag);
            $req->bindParam('blog_id', $last_id);

            $tag = $tag2;
            $last_id = $id;

            $req->execute();
        }
           }
        //} else {"no tags selected" ;}
         
        //upload product image:  
        Blog::uploadFiles($imagename);
        
         echo "<script type='text/javascript'>location.href = '?controller=blogger&action=dashboard';</script>";
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    const InputKey = 'myfile';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadFiles($imagename) {

        $db = Screw_it::getInstance();
        
        $filea=$_FILES["myfile"]["type"];

        foreach ($_FILES["myfile"]["tmp_name"] as $key => $tmp_name) {

            $temp = $_FILES["myfile"]["tmp_name"][$key];
            $imagename = $_FILES["myfile"]["name"][$key];  
            $file_type = $_FILES["myfile"]["type"][$key];
            //save this in the db!!
        
        if (empty($_FILES["myfile"]["tmp_name"])) {
            //die("File Missing!");
            die("File Missing! <br>");
        } else {
            echo "";
        }

        if (isset($_FILES["myfile"]["tmp_name"][2])) {
            echo"";
        } else {
            echo ("Please upload 3 images<br>");
        }

        /* if ($imagename < 3) {
          echo "You haven't uploaded enough images, please upload 3 <br>";
          } else {
          echo "";
          } */     

//         if (!in_array($_FILES["myfile"]["tmp_name"], self::AllowedTypes)) {
//          echo"File Type Not Allowed: " . $_FILES["myfile"]["name"][$key] . PHP_EOL;
//          } else {
//          echo "";
//          } 
          if (!in_array($file_type, self::AllowedTypes)) {
            echo ("Handle File Type Not Allowed: ");
        }

        //$tempFile = $_FILES[self::InputKey]['tmp_name']; 
        $path = DIRECTORY_SEPARATOR . 'Applications' . DIRECTORY_SEPARATOR . 'XAMPP' . DIRECTORY_SEPARATOR . 'xamppfiles' . DIRECTORY_SEPARATOR . 'htdocs' . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
        $destinationFile = $path . $imagename;
        

        move_uploaded_file($temp, $destinationFile);
        //(move_uploaded_file($_FILES[self::InputKey]['tmp_name'], $destinationFile));
        if (!move_uploaded_file($temp, $destinationFile)) { //file does upload not usre why throwing error?
            echo "file not uploaded or images already exist! <br>";
        } else {
            echo "your files have uploaded";
        }

        //Clean up the temp file
        if (file_exists($temp)) {
            unlink($temp);
        }
        }
    }

    public static function remove($blog_id) {
        $db = Screw_it::getInstance();
        //make sure $id is an integer
        $blog_id = intval($blog_id);
        $req = $db->prepare("delete FROM blog_posts WHERE blog_id = :blog_id;");
        // the query was prepared, now replace :id with the actual $id value
        
        $req->execute(array('blog_id' => $blog_id));
        
        echo "<script type='text/javascript'>location.href = '?controller=blogger&action=dashboard';</script>";
    }  

     

    public static function updateImages($imagename) {

        $db = Screw_it::getInstance();

        foreach ($_FILES["myfile"]["tmp_name"] as $key => $tmp_name) {

            $temp = $_FILES["myfile"]["tmp_name"][$key];
            $imagename = $_FILES["myfile"]["name"][$key];   //save this in the db!!
            //echo $imagename;
        }

        if (empty($_FILES["myfile"]["tmp_name"])) {
            //die("File Missing!");
            die("File Missing! <br>");
        } else {
            echo "";
        }

        if (isset($_FILES["myfile"]["tmp_name"][2])) {
            echo"";
        } else {
            echo ("Please upload 3 images<br>");
        }

        /* if ($imagename < 3) {
          echo "You haven't uploaded enough images, please upload 3 <br>";
          } else {
          echo "";
          } */

        /* if (!in_array($_FILES["myfile"]["tmp_name"], self::AllowedTypes)) {
          echo"File Type Not Allowed: " . $_FILES["myfile"]["name"][$key] . PHP_EOL;
          } else {
          echo "";
          } */

        //$tempFile = $_FILES[self::InputKey]['tmp_name']; 
        $path = DIRECTORY_SEPARATOR . 'Applications' . DIRECTORY_SEPARATOR . 'XAMPP' . DIRECTORY_SEPARATOR . 'xamppfiles' . DIRECTORY_SEPARATOR . 'htdocs' . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
        $destinationFile = $path . $imagename;

        move_uploaded_file($temp, $destinationFile);
        //(move_uploaded_file($_FILES[self::InputKey]['tmp_name'], $destinationFile));
        if (!move_uploaded_file($_FILES["myfile"]["tmp_name"][$key], $destinationFile)) { //file does upload not usre why throwing error?
            echo "your images have not uploaded! <br>";
        } else {
            echo "";
        }

        //Clean up the temp file
        if (file_exists($temp)) {
            unlink($temp);
        }
    }

}
