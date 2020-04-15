<?php

class Mod {
    
    public function getAllTitles(){
    $sql = "select title from blog_posts";
    $stmt = Screw_it::getInstance()->query($sql);
    $result = $stmt->fetchAll();
    
    foreach( $result as $row ) {
    $title[] = $row['title'];
    }

    return $title;
}
    
    
    
    public function getDetails($user_id) {
        $db = Screw_it::getInstance();
        
        $user_id = intval($user_id);
        
        $req = $db->prepare('SELECT * FROM users WHERE user_id = :user_id;');
        
                if (!$req) {
                    echo "error, pls handle";
                }

        $req->execute(array('user_id' => $user_id));
        $mem_details = $req->fetch();
        $details = $mem_details;

        return $details;
  
    }

    public function getFavourites($user_id) {
        $db = Screw_it::getInstance();
        $sql = "select blog_posts.*, favourites.*, users.*
                    from blog_posts
                        inner join favourites
                    on blog_posts.blog_id = favourites.blog_id
                        inner join users
                    on favourites.user_id = users.user_id
                WHERE users.user_id = :user_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('user_id' => $user_id));
        $favourites = $stmt->fetchAll();

        return $favourites; 
        
}

    public function getComments10() {
        $db = Screw_it::getInstance();
        $sql = "select blog_posts.*, comments.*, users.*
                    from blog_posts
                        inner join comments
                    on blog_posts.blog_id = comments.blog_id
                        inner join users
                    on comments.user_id = users.user_id
                ORDER BY comments.comment_date desc
                LIMIT 10";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $comms = $stmt->fetchAll();

        return $comms;
    }
    
    public function commentsCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(comment_id) AS count from comments;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $commsCount = $stmt->fetchAll();

        return $commsCount;
    }
    
    public function blogsCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(blog_id) AS count from blog_posts;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $blogCount = $stmt->fetchAll();

        return $blogCount;
    }
    
    public function memberCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(user_id) AS count from users where user_type = 'Member';";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
}