<?php

include 'Users.php';

class Blogger extends Users {

    protected $bio;
    protected $twitter_url;
    protected $insta_url;
    protected $facebook_url;
            
    function getBio() {
        return $this->bio;
    }

    function getUrl() {
        return $this->url;
    }

    function setBio($bio) {
        $this->bio = $bio;
    }

    function setUrl($url) {
        $this->bio = $url;
    }
    

    public function __construct($bio, $url) {
        $this->bio = $bio;
        $this->url = $url;
    }

  
    public function getallBloggerprofiles() {
      $db = Screw_it::getInstance();
      
            $query = "SELECT user_fn, user_ln, profile_pic, bio, twitter_url, insta_url, facebook_url, date_joined  FROM Users WHERE user_type = 'Blogger' ORDER BY date_joined ASC";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $bloggerprofiles = $stmt->fetchall(PDO::FETCH_ASSOC);
        
            return  $bloggerprofiles;

    }

    public function getCountBlogs($user_id) {
      $db = Screw_it::getInstance();
      
            $user_id = intval($user_id);
      
            $query = "SELECT count(*) FROM blog_posts WHERE user_id = :user_id;";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);
            $stmt->execute();
            $blogs = $stmt->fetch();
        
            return  $blogs['count(*)'];

    }
    
        public function getCountComments($user_id) {
      $db = Screw_it::getInstance();
      
            $user_id = intval($user_id);
      
            $query = "SELECT count(*) FROM comments WHERE user_id = :user_id;";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);
            $stmt->execute();
            $comments = $stmt->fetch();
        
            return  $comments['count(*)'];
    }

        public function getProfile($user_id) {
        $db = Screw_it::getInstance();
        
        $user_id = intval($user_id);
        
        $query = "SELECT * FROM users WHERE user_id = :user_id;";
        $stmt = $db->prepare($query);
        $stmt->execute(array('user_id' => $user_id));
        $blogger_profile = $stmt->fetch();
        $profile = $blogger_profile;
        
        return $profile;
        
    }

    
    public static function updateProfile($user_id) {
        $db = Screw_it::getInstance(); 
        $req = $db->prepare("Update Users set username=:username, bio=:bio, dob=:dob, user_fn=:user_fn, user_ln=:user_ln, email=:email, twitter_url=:twitter, instagram_url=:insta, facebook_url=:facebook, profile_pic=:profile_pic where user_id=:user_id;");
        $req->bindParam(':user_id', $user_id);
        $req->bindParam(':username', $username);
        $req->bindParam(':bio', $bio);
        $req->bindParam(':dob', $dob);
        $req->bindParam(':user_fn', $fn);
        $req->bindParam(':user_ln', $ln);
        $req->bindParam(':email', $email);
        $req->bindParam(':twitter', $twitter);
        $req->bindParam(':insta', $insta);
        $req->bindParam(':facebook', $facebook);
        $req->bindParam(':profile_pic', $profilepic);
 

        if (isset($_POST['bio']) && $_POST['bio'] != "") {
            $filteredBio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['dob']) && $_POST['dob'] != "") {
            $filteredBio = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['user_fn']) && $_POST['user_fn'] != "") {
            $filteredfn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['user_ln']) && $_POST['user_ln'] != "") {
            $filteredln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredemail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['facebook']) && $_POST['facebook'] != "") {
            $filteredfacebook = filter_input(INPUT_POST, 'facebook', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['twitter']) && $_POST['twitter'] != "") {
            $filteredtwitter = filter_input(INPUT_POST, 'twitter', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['insta']) && $_POST['insta'] != "") {
            $filteredinsta = filter_input(INPUT_POST, 'insta', FILTER_SANITIZE_SPECIAL_CHARS);
        }
       
        $username = $filteredUsername;
        $bio = $filteredBio;
        $fn = $filteredfn;
        $ln = $filteredln;
        $email = $filteredemail;
        $req->execute();
        
        //upload profile image if it exists
        if (!empty($_FILES[self::InputKey]['profile_pic'])) {
		Blogger::uploadFile($profilepic);
	}
    }
    
    public static function uploadFile(string $name) {

	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}

	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "/Applications/XAMPP/xamppfiles/htdocs/Screw-it/views/images/";
	$destinationFile = $path . $name;

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}

    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    const InputKey = 'myfile';
    
    public static function deleteAccount($user_id) {
      $db = Screw_it::getInstance();
      //make sure $id is an integer
      $user_id = intval($user_id);
      $req = $db->prepare('delete FROM Users WHERE user_id = :user_id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('user_id' => $user_id));
  }


public function getBlogsFavsComments($user_id) {
    $db = Screw_it::getInstance();
      $user_id = intval($user_id);
      $query = "SELECT b.blog_id, b.title, b.date_posted, COUNT(DISTINCT f.user_id) AS favourite_count, COUNT(DISTINCT c.comment) AS comment_count FROM blog_posts b LEFT JOIN favourites f ON f.blog_id = b.blog_id LEFT JOIN comments c ON c.blog_id = b.blog_id WHERE b.user_id = :user_id GROUP BY 1 ORDER BY b.date_posted ASC";
      $stmt = $db->prepare($query);
      $stmt->execute(array('user_id' => $user_id));
        //$results = $stmt->fetch();
        
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
        return $results;
    
}
    }

    /* I think this will need the blog model because it's trying to create a new class of blog... 
        public static function getUserBlogs($user_id) {
        $db = Screw_it::getInstance();
        $userid = intval($user_id);
        $list = [];
        $req = $db->prepare("SELECT blog_posts.blog_id, blog_posts.user_id, blog_posts.title, blog_posts.body, blog_posts.body2, blog_posts.main_image, blog_posts.date_posted, Users.user_fn, Users.user_ln, Users.profile_pic
                        FROM blog_posts
                        INNER JOIN Users ON blog_posts.user_id=Users.user_id WHERE blog_posts.user_ID = '" . $userid . "';");
        $req->execute();
        foreach ($req->fetchAll() as $blog) {
            $list[] = new Blog(
                    $blog['blog_id'], $blog['user_id'], $blog['title'], $blog['body'], $blog['body2'], $blog['main_image'], $blog['date_posted'], $blog['user_fn'], $blog['user_ln'], $blog['profile_pic']);
        }
        return $list;
    }
    */
    
