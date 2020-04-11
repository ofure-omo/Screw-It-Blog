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

  
    public function getBloggerprofiles() {
      $db = Screw_it::getInstance();
      
            $query = "SELECT user_fn, user_ln, profile_pic, bio, twitter_url, insta_url, facebook_url, date_joined  FROM Users WHERE user_type = 'Blogger' ORDER BY date_joined ASC";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $bloggerprofiles = $stmt->fetchall(PDO::FETCH_ASSOC);
        
            return  $bloggerprofiles;

    }


}
