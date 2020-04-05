<h1> Search Results Page </H1>
<div class="article-container">
    <?php
           

          echo "There are ".count($results)." results"; 
          ?>
          <p>Here is a list of all blogs:</p>

<?php foreach($results as $blogpost) : ?>
  <p>
    <?php echo $blogpost['title'] ?> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=read&id=<?php echo $blogpost['blog_id']; ?>'>Go to blog</a> &nbsp; &nbsp;
  </p>
<?php endforeach; ?>
  
</html>
