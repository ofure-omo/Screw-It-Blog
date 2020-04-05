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
    </head>
    <body>
<h1> Search </H1> 
<form action="SearchResults.php" method="POST">
    <input type="text" name="search" placeholder="search">
    <button type="submit" name="submit-search"></button>
</form>      
</body>

<div>
    <?php
    $sql = "Select * from Blog_posts";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if($queryResults > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo "<a href='article.php?title=".$row['title']."&date=".$row['date_posted']."'><div class='article-box'>
                <h3>".$row['title']."</h3>
                <p>".$row['date_posted']."</p>
                <p>".$row['body']."</p>
                <div></a>";
    }
    
    }
    ?>
    </div>
</body>
</html>