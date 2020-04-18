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

    public function getFavourites($user_id) {
        $db = Screw_it::getInstance();
        $user_id = intval($user_id);
        $req = $db->prepare('SELECT favourites.*, blog_posts.*
                            FROM favourites
                            INNER JOIN Blog_posts ON favourites.blog_id = Blog_posts.blog_id 
                            WHERE favourites.user_id = :user_id
                            ORDER BY date_posted DESC;');
        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('user_id' => $user_id));
        $favourite = $req->fetch();

        return $favourite;
    }

    public function getComments($user_id) {
        $db = Screw_it::getInstance();
        $user_id = intval($user_id);
        $req = $db->prepare('SELECT comments.*, blog_posts.*
                            FROM comments
                            INNER JOIN Blog_posts ON comments.blog_id = Blog_posts.blog_id 
                            WHERE comments.user_id = :user_id
                            ORDER BY date_posted DESC;');
        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('user_id' => $user_id));
        $comms = $req->fetch();

        return $comms;
    }

    public function getCountComments($user_id) {
        $db = Screw_it::getInstance();
        $sql = "select count(comment_id) AS count from comments where user_id = :user_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('user_id' => $user_id));
        $commsCount = $stmt->fetchAll();
        return $commsCount;
    }

    public function deleteUser($user_id) {
        if (isset($_GET['user_ID'])) {
            $id = $_GET['user_ID'];
            $pdo->query("DELETE FROM Users WHERE user_id = :user_id;");
        }
        $deleteUser = $req->fetch();
        return $deleteUser;
    }

    public function unfavourite($user_id, $blog_id) {
        if (isset($_GET['user_ID'])) {
            $id = $_GET['user_ID'];
            $pdo->query("DELETE FROM favourites WHERE user_id = :user_id and blog_id = :blog_id;");
        }
        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('user_id' => $user_id, 'blog_id' => $blog_id));
        $unfavourite = $req->fetch();

        return $unfavourite;
    }

    public function deleteComment($user_id) {
        if (isset($_GET['user_ID'])) {
            $id = $_GET['user_ID'];
            $pdo->query("DELETE FROM comments WHERE (user_id = :user_id;");
        }
        $deleteComment = $req->fetch();
        return $deleteComment;
    }

}
