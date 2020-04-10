<?php

class Comments {

    public function addComment() {

        $db = Screw_it::getInstance();

        $error = '';
        $comment = '';

        if (empty(filter_input(INPUT_POST, "comment", FILTER_SANITIZE_SPECIAL_CHARS))) {

            $error .= "<p class='text-danger'>Comment is required</p>";
            
        } else {

            $comment .= filter_input(INPUT_POST, "comment", FILTER_SANITIZE_SPECIAL_CHARS);
        }

        /*if (empty($_SESSION["user_id"])) { //check if session is empty and show error message for user to log in or create an account 
            $error = "<p class='text-danger'>You need to be logged in to post a comment, please <a href='#'>log in</a> or <a href='?controller=register&action=registerUser'>create an account!</a></p>";
        }*/

        if ($error == '') {
            $query = "INSERT INTO comments (parent_comment_id, comment) VALUES (:parent_comment_id, :comment);";
            $stmt = $db->prepare($query);
            $stmt->execute(
                    array(
                        ':parent_comment_id' => '0',
                        ':comment' => $comment
                    )
            );

            $error = "<label class='text-success'>Comment added</label>";
        }

        $data = array(
            'error' => $error
        );
        echo json_encode($data);
    }

}
