<?php include_once $_SERVER ['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'connection.php';
//include_once DIRECTORY_SEPARATOR . 'Applications' . DIRECTORY_SEPARATOR . 'XAMPP' . DIRECTORY_SEPARATOR . 'xamppfiles' . DIRECTORY_SEPARATOR . 'htdocs' . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'pagetorun.php'; 

$db = Screw_it::getInstance();

    $_GET['blog_id'];
    $blog_id = $_GET['blog_id'];



$query = " SELECT * FROM comments 
         INNER JOIN users ON comments.user_id = users.user_id
         WHERE blog_id = :blog_id
         ORDER by comment_id desc
         ";

$stmt = $db->prepare($query);

$stmt->execute(array(
    ':blog_id' => $blog_id
));

$result = $stmt->fetchAll();

$output= '';
$data = '';

foreach($result as $row) 
{
    
    $output .= '
              <div class="comment" style="margin-top: 50px; color:black;">
             <b> <div class="panel-heading username" style="font-size: 1.1em;"><span class="user-comment"> By ' . $row["username"] . ' </span></b><br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
                  <div class="comment" style="margin-bottom:10px;" > ' . $row["comment"] . '</div>           
             </div>
    ';
}

echo $output;
