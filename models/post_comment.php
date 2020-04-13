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
              <div class="comment" style="margin-top: 50px; color:black;">
             <b> <div class="panel-heading " style="font-size: 1.1em;"><span class="user-comment"> By ' . $row["username"] . ' </span></b><br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
                  <div class="panel-body" > ' . $row["comment"] . '</div>
             
                      <div class="panel-footer" align="left"><button onclick="reply()" type="button" class="btn btn-info reply" id= ' . $row["comment_id"] . '>
                          <span style="font-size: 0.8em; padding:0px;" >REPLY</span></button>
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
             WHERE parent_comment_id = '" . $parent_id . "' AND blog_id = '175'
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
                    <div style= "margin-left:' . $marginleft . 'px margin-bottom: 500px; margin-top:12px; color: dark-grey;">
               <b><div style="font-size: 1em;">' . $row["username"] . ' </b> <span style="font-size:0.85em;">replied</span>  '
                    . '<br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
                    <div class="panel-body"> ' . $row["comment"] . '</div> 
     
                        <div align="left"><button type="button"  style=" margin-bottom:20px; size:5px;" class="btn btn-info reply" id= ' . $row["comment_id"] . '>
                          <span style="font-size: 0.8em; padding:0px;">REPLY</span></button>
                </div> 
  
                
                         ';

            $output .= get_reply_comment($db, $row["comment_id"], $marginleft);
           
        }
    }

    return $output;

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
