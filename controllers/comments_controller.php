<?php
include_once $_SERVER ['DOCUMENT_ROOT'] .DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR.'models/comments.php';

class CommentsController {
    
    public function add(){
        
        if($_SERVER['REQUEST_METHOD'] == 'GET') {

            $blog_id = $_GET['blog_id'];
              if (isset($_POST['addComment'])) {
            $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);
        }

          $req = $db->prepare("INSERT INTO comments(comment, blog_id, user_id)
                    VALUES ('$comment, '.$blog_id.', '".$_SESSION['user_id']."')");
          
          $req->execute();
         
          exit('success');


    }
    }
    
    public function get(){
        
        Comments::getComment($blog_id);
    }
    }
        
//    
//   public function add() {
//         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
////             echo $_REQUEST['comment'];
//             $blog_id =($_GET['blog_id']);
//               Comments::addComment($_GET['blog_id']);
//
//         }
//
//   }
//   
//    public function post() {
//        
//        if (isset($_GET['blog_id'])) {
//
//        try {
//            // we use the given id to get the correct post
//             Comments::postComment($_GET['blog_id']);
//           // require_once('views/blogpost/read.php');
//            
//        } catch (Exception $ex) {
//            return call('pages', 'error');
//        }
//               
//         }

  



  