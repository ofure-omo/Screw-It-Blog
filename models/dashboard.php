<?php

class dashboard {

    public function getDetails() {
        $stmt = $pdo->prepare("SELECT * FROM users;");
        $stmt->execute(array(":id" => $_SESSION["id"]));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_object = new User($user["user_id"], htmlentities($user["user_UN"]), htmlentities($user["user_FN"]), htmlentities($user["user_SN"]),
                htmlentities($user["user_EMAIL"], htmlentities($user["user_DOB"]), htmlentities($user["TEL"])));
    }

    public function getFavourites() {
        $db = Screw_it::getInstance();
        $user_id = intval($user_id);
        $req = $db->prepare('SELECT * FROM favourites
                             INNER JOIN Users ON favourites.user_id = Users.user_id WHERE user_id = :user_id;');
        $favourites = $member_object->getFavourites($req);
        $user["favourites"] = [];
        foreach ($favourites as $favourite) {
            $time_diff = (time() - strtotime($favourite->getPost_date())) / (60 * 60 * 24);
            $time_diff = floor($time_diff);
            $favourite_details = [htmlentities($favourite->getTitle())];
            array_push($user["favourites"], $favourite_details);
        }

        if (!$req) {
            echo "error, pls handle";
        }
    }

    public function getComments() {
        $db = Screw_it::getInstance();
        $user_id = intval($user_id);
        $req = $db->prepare('SELECT * FROM comments
                             INNER JOIN Users ON comments.user_id = Users.user_id WHERE user_id = :user_id;');


        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('user_id' => $user_id));
        $comms = $req->fetch();

        return $comms;
        echo $comms['comment'] . "<br>";
    }

}
