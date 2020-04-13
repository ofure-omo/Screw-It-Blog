<?php session_start(); 

//COMMENTS
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
         WHERE parent_comment_id = '0' AND blog_id ='175'
         ORDER BY comment_id DESC";

$stmt = $db->prepare($query);

$stmt->execute();

$result = $stmt->fetchAll();

foreach ($result as $row) {

    $output .= '
              <div class="panel panel-default comment" style="margin-top: 50px;">
             <b> <div class="panel-heading" style="font-size: 1.1em;"> By ' . $row["username"] . ' </b><br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
                  <div class="panel-body" > ' . $row["comment"] . '</div>
             
                      <div class="panel-footer" align="left"><button type="button" style="background-color: pink;" class="btn btn-default reply" id= ' . $row["comment_id"] . '>
                          REPLY</button>
                          </div>
              </div>
         
';
    $output .= get_reply_comment($db, $row["comment_id"]);
}

echo $output;



//REPLIES

function get_reply_comment($db, $parent_id = 0, $marginleft = 0) {

    $db = Screw_it::getInstance();
    $output='';

    $query = "SELECT * FROM comments 
             INNER JOIN Users ON comments.user_id = users.user_id 
             WHERE parent_comment_id = '" . $parent_id . "' AND blog_id = '225'
        ";

    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $count = $stmt->rowCount();

    if ($parent_id == 0) 
    {
        
        $marginleft = 0;
        
    } 
    else 
    {
        $marginleft = $marginleft + 55;
        
    }

    if ($count > 0) {
        foreach ($result as $row) {
            
            $output='';
            
            $output .= '
                    <div style= "margin-left:' . $marginleft . 'px margin-bottom: 500px; margin-top:10px;">
               <b><div style="font-size: 1.1em;"> By ' . $row["username"] . ' </b> <br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
                    <div class="panel-body"> ' . $row["comment"] . '</div> 
     
                        <div align="left"><button type="button" style="background-color: pink; margin-bottom:20px; size:5px;" class="btn btn-default reply" id= ' . $row["comment_id"] . '>
                          REPLY</button>
                </div> 
                
                         ';

            $output .= get_reply_comment($db, $row["comment_id"], $marginleft);
           
        }
    }

    return $output;

}
?>

<!--<script src="text/javascript"> 
    
    $(document).ready(function(){
        $("button").click(function(){
            $("#reply").toggle();
        });
    });
    
    </script>-->
