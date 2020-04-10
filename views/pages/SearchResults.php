<?php 
if (count($results) == 1) {
echo "<span class='results'><br><br><h4>There is " . count($results) . " search result for: " . $userentry . "</h4></span>";
} elseif (count($results) > 0) {
echo "<span class='results'><br><br><h4>There are " . count($results) . " search results for: " . $userentry . "</h4></span>";
} else { echo "<center><span class='results'><h4><br>Sorry, there are no results matching your search.<br><h4></span></center>"; }
?>
<br>


   <?php       
foreach ($results as $blogpost) : ?>
    <span class='results'><h5>
            <a href='?controller=blogp&action=read&blog_id=<?php echo $blogpost['blog_id']; ?>'><?php echo $blogpost['title'] ?></a><br></h5><p> &nbsp; &nbsp;
        <?php $d = strtotime($blogpost['date_posted']);
    echo "Posted on " . date("jS F Y", $d) . "<br>";
    ?> &nbsp; &nbsp;</p></span>
<?php endforeach; ?>
</html>

 
  

            
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
  <?php foreach ($results as $blogpost) : ?>
            <div class="card text-center">
                <img class="card-img-top" src="<?php echo $blogpost['main_image'] ?>" height="100" width="100" >
                <div class="card-body">
                    <h5 class="card-title"><?php echo $blogpost['title'] ?></h5>
                    <p class="card-text"><?php $blogpostshort = substr($blogpost['body'], 0, 150);
    echo $blogpostshort . "..." ?></p>  
                    <a href='?controller=blog&action=read&blog_id=<?php echo $blogpost['blog_id']; ?>' class="btn btn-primary">Read More</a>
                </div>
                <div class="card-footer">
                    <p class="text-muted"><?php
                        $d = strtotime($blogpost['date_posted']);
                        echo "Posted on " . date("jS F Y", $d) . "<br>";
                        ?></p>
                </div>
                
            </div>
            <br>
            <?php endforeach; ?>
           </div>
        
    </div>
  </div>
            <br>
            <br>
            <br>
            
            