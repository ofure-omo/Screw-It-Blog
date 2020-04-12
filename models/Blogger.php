<?php

class Blogger {

    protected $profile_pic;
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

    
    public static function updateProfile() {
        $db = Db::getInstance(); 
        
        $req = $db->prepare("Update Users set username=:username, bio=:bio, user_fn=:user_fn, user_ln=:user_ln, email=:email where user_id=:user_id;");
        
 
                $user_id = intval($user_id);
        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['bio']) && $_POST['bio'] != "") {
            $filteredBio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_SPECIAL_CHARS);
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
       
        $username = $filteredUsername;
        $bio = $filteredBio;
        $fn = $filteredfn;
        $ln = $filteredln;
        $email = $filteredemail;

        $req->bindParam(':username', $username);
        $req->bindParam(':bio', $bio);
        $req->bindParam(':fn', $fn);
        $req->bindParam(':ln', $ln);
        $req->bindParam(':email', $email);
        
        
        $req->execute();
        
        /*upload profile image if it exists
        if (!empty($_FILES[self::InputKey]['name'])) {
		Product::uploadFile($name);
	}*/
    }
    }
