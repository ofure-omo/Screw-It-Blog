<?php session_start();

//COMMENTS
class Screwit {

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

$db = Screwit::getInstance();
$output = '';

$query = "SELECT * FROM comments
         INNER JOIN Users ON comments.user_id = users.user_id
         WHERE parent_comment_id = '0' AND blog_id ='173'
         ORDER BY comment_id DESC";

$stmt = $db->prepare($query);

$stmt->execute();

$result = $stmt->fetchAll();

foreach ($result as $row) {

    $output .= '
              <div class="comment" style="margin-top: 50px; color:black;">
             <b> <div class="panel-heading username" style="font-size: 1.1em;"><span class="user-comment"> By ' . $row["username"] . ' </span></b><br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
                  <div class="comment" style="margin-bottom:10px;" > ' . $row["comment"] . '</div>
             
                      <div class="panel-footer" align="left"><button id="reply-btn" type="button" class="btn btn-info reply" id= ' . $row["comment_id"] . '>
                          <span style="font-size: 0.8em; padding:0px;" >REPLY</span></button>
                          </div>
             </div>
         
';
    $output .= get_reply_comment($db, $row["comment_id"]);
}

echo $output;
//echo "<script type='text/javascript'>location.reload();
//return false;</script>"; 
//echo '<script type="text/javascript">window.location.reload();.</script>';
//REPLIES

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    $_GET['blog_id'];
       echo $_GET['blog_id'];
    
}

function get_reply_comment($db, $parent_id = 0) {

    $db = Screwit::getInstance();
    $output = '';

    $query = "SELECT * FROM comments 
             INNER JOIN Users ON comments.user_id = users.user_id 
             WHERE parent_comment_id = '" . $parent_id . "' AND blog_id = '173'
        ";

    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $count = $stmt->rowCount();


    if ($count > 0) {
        foreach ($result as $row) {

            $output = '';

            $output .= '
                    <div class="reply-box" style= "margin-bottom: 50px; margin-top:12px; color: dark-grey;">
               <b><div class ="username-reply" style="font-size: 1em;">' . $row["username"] . ' </b> <span style="font-size:0.85em;">replied</span>  '
                    . '<br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
                    <div class="comment-reply" style="margin-bottom:10px;" > ' . $row["comment"] . '</div> 
                        <div align="left"><button type="button"  style=" margin-bottom:20px; size:5px;" class="btn btn-info" id="reply-btn" ' . $row["comment_id"] . '>
                          <span style="font-size: 0.8em; padding:0px;">REPLY</span></button>
                </div> 
  
                
                         ';

            $output .= get_reply_comment($db, $row["comment_id"]);
        }
    }

    return $output;
    //echo "<script type='text/javascript'>location.reload(true);</script>";
}
?>

<style>
    .btn{
        background-color: #fca15f;
        border: none;
    }

    .btn:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.12), 0 6px 20px 0 rgba(0, 0, 0, 0.05);
        background-color: #e88f4f;

    }
    
    #reply-btn {
         background-color: #fca15f;
  border: 20px;
  color: white;
  padding: 5px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
    }
    
    @media only screen and (max-width: 400px) {
        
        .username-reply {
            font-size:0.7em;
        }
        
         .username {
            font-size:0.8em;
        }
        
         .comment-reply {
            font-size:0.9em;
        }
        
         .comment {
            font-size:0.9em;
            
        }
        
        .reply-btn {
            font-size:0.5em;
            padding: 10px 4px;
        }
        
        .reply-box {
            margin-bottom: 20px
        }
        
    }
</style>

<!--<script>
function reply() {
  var x = document.getElementById("hide-box");
  if (x.style.display === "none") {
    
  } else {
    x.style.display = "none";
    x.style.display = "block";
  }
}
</script>-->

<!--<script src="text/javascript"> 
    
    $(document).ready(function(){
        $("button").click(function(){
            $("#reply").toggle();
        });
    });
    
    </script>-->
