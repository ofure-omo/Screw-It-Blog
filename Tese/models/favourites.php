<?php

class favourites {

    public $blog_id;
    public $user_id;

    function __construct($blog_id, $user_id) {
        $this->blog_id = $blog_id;
        $this->user_id = $user_id;
    }

    public static function checkfav($blog_id) {
        
        $blog_id = intval($blog_id);

        $sql = "SELECT blog_id FROM blog_posts WHERE blog_id = '".$blog_id."' ";
        $stmt = Screw_it::getInstance()->query($sql);

        while ($row = $stmt->fetchAll()) {
            $sql = "SELECT * FROM favourties WHERE user_id= 1 AND blog_posts = '" . $row['blog_id'] . "'";
            $stmt = Screw_it::getInstance()->query($sql);
            
            return $stmt;

//            while ($row = $stmt->fetch()) {
//                //$rows[] = $row;
//                return $row['blog_id'];
//            }
        }
    }

    public static function getfav() {

        $sql = "SELECT * FROM favourties WHERE user_id= 1 blog_posts = '" . $blog_id . "'";
        $stmt = Screw_it::getInstance()->query($sql);
        while ($row = $stmt->fetch()) {
            //$rows[] = $row;
            return $row['blog_id'];
        }
        }
        return $title;

        $req = $db->query("SELECT blog_id FROM favourties WHERE user_id='" . $_SESSION['user_id'] . "';");

        $fav = $db->fetch();

        return $fav;


        if (mysql_num_rows($req) == 1) {
            //user already liked the post
        } else {
            //user hasnt liked the post yet 
        }
    }

}
