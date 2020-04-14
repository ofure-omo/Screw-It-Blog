
<?php  session_start();

include 'blog.php';

 class Screw_it {
    
    private static $instance = NULL;

    //Singleton Design Pattern
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=Screw-It', 'root', '', $pdo_options);
      }
      return self::$instance;
    }
}    

        $db= Screw_it::getInstance();

        $error='';
        $comment_content='';
       // $blog_id= '';
        
        if(empty($_POST['comment_content'])){
            $error.= "<p class='text-danger'>Comment is required</p>";
        } else {
            $comment_content = filter_input(INPUT_POST, 'comment_content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if($error == '') {
            $query = "INSERT INTO comments (parent_comment_id, comment, user_id, blog_id)
                    VALUES (:parent_comment_id, :comment, '".$_SESSION['user_id']."', '173' )";
            $stmt = $db->prepare($query);
            
            $stmt->execute (
                    array(
                        ':parent_comment_id'  => $_POST["comment_id"],
                        ':comment'  =>  $comment_content
                    )
                    );
            $error = "<label class='text-success'>Comment added</label>";
        }
        $data = array(
            'error'  => $error
        );
        echo json_encode($data);

?>
