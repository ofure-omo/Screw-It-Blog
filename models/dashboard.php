<?php

class dashboard {

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

    public function getFavourites() {
        $db = Screw_it::getInstance();
        $user_id = intval($user_id);
        $req = $db->prepare('SELECT * FROM favourites
                             INNER JOIN Users ON favourites.user_id = Users.user_id WHERE user_id = :user_id,
                             INNER JOIN Blog_id ON favourites.blog_id = Blog_posts.blog_id WHERE blog_id = :blog_id ORDER BY date_posted DESC;' );
   
        $fav_blog = $member_object->getFavourites($req);
        $user["favourites"] = [];

        if (!$req) {
            echo "error, pls handle";
        }
    
    
    return $fave;
}

    public function getComments() {
        $db = Screw_it::getInstance();
        $user_id = intval($user_id);
        $req = $db->prepare('SELECT * FROM comments
                             INNER JOIN Users ON comments.user_id = Users.user_id WHERE user_id = :user_id,
                             INNER JOIN Blog_id ON comments.blog_id = Blog_posts.blog_id WHERE blog_id = :blog_id ORDER BY date_posted DESC;');
        $comments = $comms;

        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('user_id' => $user_id));
        $comms = $req->fetch();

        return $comms;
    }

}
