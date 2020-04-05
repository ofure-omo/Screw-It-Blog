<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "screw-it";

$conn = mysqli_connect($server,$username, $password, $dbname);   
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<body>
    
</body>
<h1> Search Page </H1>
<div class="article-container">
    <?php
    if (isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM blog_posts WHERE title LIKE '%$search%' OR body LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);
            
            echo "There are ".$queryResults." results";
               
if($queryResults > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo "<a href='article.php?title=".$row['title']."&date=".$row['date_posted']."'><div class='article-box'>
            <h3>".$row['title']."</h3>
                <p>".$row['body']."</p>
                    <p>".$row['date_posted']."</p>"
                . "<div></a>";
    }
    }else {
        echo "There are no results matching your search";
    }
    }
    ?>
</div>
</html>
