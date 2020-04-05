<p>Here is a list of all the blogs:</p>

<?php foreach($blogs as $blog) { ?>
  <p>
    <?php echo $blog->title; ?> &nbsp; &nbsp;
    <a href='?controller=blog&action=read&id=<?php echo $product->id; ?>'>Read a blog</a> &nbsp; &nbsp;
    <a href='?controller=blog&action=delete&id=<?php echo $product->id; ?>'>Delete a blog</a> &nbsp; &nbsp;
    <a href='?controller=blog&action=update&id=<?php echo $product->id; ?>'>Update a blog</a> &nbsp;
  </p>
<?php } ?>