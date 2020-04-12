<?php

//class Comments {
//
//    public function addComment() {
//
//        $db = Screw_it::getInstance();
//        
//         
//            if (isset($_POST['add_comment']) && $_POST['add_comment'] != "") {
//            $filteredComment = filter_input(INPUT_POST, 'add_comment', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//
//            $req = $db->prepare("INSERT INTO comments (user_id, blog_id comment) VALUES ('".$_SESSION['user_id']."', '".$blog['blog_id']."', :comment);");
//
//            $req->bindParam(':comment', $comment);
//            
//            $comment = $filteredComment;
//            
//            $req->execute();
//            exit('sucess');
//        }
//       
//
//}
?>
