<h1> Search Results Page </H1>
<div class="article-container">
    <?php
            
          echo "There are ".$Results." results"; 
               
if(result > 0) {
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
    
    ?>
</div>

<p>Here is a list of all blogs:</p>

<?php foreach($results as $blogpost) { ?>
  <p>
    <?php echo $blogpost->title; ?> &nbsp; &nbsp;
    <a href='?controller=product&action=read&id=<?php echo $blogpost->blog_id; ?>'>See product information</a> &nbsp; &nbsp;
  </p>
<?php } ?>
</html>


<?php

class SearchView extends Search {
    
    public function showSearch($search) {
        $results = $this->getSearch($search);
        echo "Search Results: " . $results;
    }
}


// goes in and shows info on the website