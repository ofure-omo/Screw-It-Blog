<?php

session_start();

//include 'views/blogpost/comments.php';

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

$db = Screw_it::getInstance();
$output = '';

$query = "SELECT * FROM comments 
         INNER JOIN Users ON comments.user_id = users.user_id
         WHERE parent_comment_id = '0' AND blog_id ='225'
         ORDER BY comment_id DESC";

$stmt = $db->prepare($query);

$stmt->execute();

$result = $stmt->fetchAll();

foreach ($result as $row) {

    $output .= '
              <div class="panel panel-default">
              <div class="panel-heading"> By "' . $row["username"] . '" </b> on <i> "' . $row["comment_date"] . '"</i> </div>
                  <div class="panel-body"> "' . $row["comment"] . '"</div>
                      <div class="panel-footer" align="right"><button type="button" style="background-color: pink;" class="btn btn-default reply" id= "' . $row["comment_id"] . '">
                          REPLY</button>
                          </div>
              </div>
';
    $output .= get_reply_comment($db, $row["comment_id"]);
}

echo $output;

function get_reply_comment($db, $parent_id = 0, $marginleft = 0) {

    $db = Screw_it::getInstance();
    $output='';

    $query = "SELECT * FROM comments 
             INNER JOIN Users ON comments.user_id = users.user_id 
             WHERE parent_comment_id = '" . $parent_id . "' AND blog_id = '225'
                 ORDER BY comment_id DESC
        ";

    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $count = $stmt->rowCount();

    if ($parent_id == 0) {
        $marginleft = 0;
    } else {
        $marginleft = $marginleft + 55;
    }

    if ($count > 0) {
        foreach ($result as $row) {
            
            $output='';
            
            $output .= '
                    <div class="panel panel-default" stlye="margin-left:' . $marginleft . 'px">
                <div class="panel-heading"> By ' . $row["username"] . ' </b> on <i> ' . $row["comment_date"] . '</i> </div>
                    <div class="panel-body"> ' . $row["comment"] . '</div>
                        <div class="panel-footer" align="right"><button type="button" style="background-color: pink;" class="btn btn-default reply" id= "' . $row["comment_id"] . '">
                          REPLY</button>
                </div>
                
                         ';

            $output .= get_reply_comment($db, $row["comment_id"], $marginleft);
        }
    }

    return $output;
}
