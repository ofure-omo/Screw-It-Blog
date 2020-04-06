<p>Here is a list of all the blogs:</p>

<?php foreach($blog as $blog_post) { ?>
  <p>
    <?php echo $blog_post->title; ?> &nbsp; &nbsp;
    <a href='?controller=blog&action=read&id=<?php echo $blog_post->title; ?>'>Read a blog</a> &nbsp; &nbsp;
    <a href='?controller=blog&action=delete&id=<?php echo $blog_post->title; ?>'>Delete a blog</a> &nbsp; &nbsp;
   
  </p>
<?php } ?>