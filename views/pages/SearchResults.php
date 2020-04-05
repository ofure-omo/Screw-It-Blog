<style>
    .results {
         font-size: 14px;
         font-family: 'Open Sans', sans-serif;
         text-align: center;
         postion: relative;
    }
</style>
<?php 
if (count($results) == 1) {
echo "<span class='results'><br><br><h4>There is " . count($results) . " search result for: " . $_POST['search'] . "</h4></span>";
} elseif (count($results) > 0) {
echo "<span class='results'><br><br><h4>There are " . count($results) . " search results for: " . $_POST['search'] . "</h4></span>";
} else { echo "<center><span class='results'><h4><br>Sorry, there are no results matching your search.<br><h4></span></center>"; }
?>
<br>
           
   <?php       
foreach ($results as $blogpost) : ?>
    <span class='results'><h5>
            <a href='?controller=blogpost&action=read&id=<?php echo $blogpost['blog_id']; ?>'><?php echo $blogpost['title'] ?></a><br></h5><p> &nbsp; &nbsp;
        <?php $d = strtotime($blogpost['date_posted']);
    echo "Posted on " . date("jS F Y", $d) . "<br>";
    ?> &nbsp; &nbsp;</p></span>
<?php endforeach; ?>
</html>