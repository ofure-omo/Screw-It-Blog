 <?php if($blog['layout'] === '2' && $blog['published'] === '1'): ?>

    <div class='read-header'>


            <h1 id="read-title"><?php echo $blog['title']; ?></h1> <!--header section to retrieve data from db -->


            <div>
                <?php
                if (isset($blog['profile_pic'])) {
                    $blogimg = $blog['profile_pic'];
                    $img = "<img src=$blogimg alt='profile picture' class='avatar'>";
                    echo $img;
                } else {
                    echo "<img src='views/images/ryan.jpg' alt='Ryan Gosling' class='avatar'>";
                }
                ?>
            </div>
            <p class='header-info' id ='author'>Written by:<a href='?controller=blogger&action=about' style='text-decoration: none;'> <?php echo $blog['user_fn'] . PHP_EOL . $blog['user_ln']; ?></a> <!--should be replaced with username based on the session id-->
                on the <?php
                $d = strtotime($blog['date_posted']);
                echo date('jS F Y', $d);
                ?></p>
            <?php
            $categories = $blog['category'];
            if ($categories == 'RENOVATE') {
                $category = "<p class='category'><a href='?controller=categories&action=searchCategory&category=renovate' style='text-decoration: none;'> $categories</p></a> ";
                echo $category;
            } else {
                echo "";
            }
            ?>
            <?php
            $categories = $blog['category'];
            if ($categories == 'CREATE') {
                $category = " <p class='category'><a href='?controller=categories&action=searchCategory&category=create' style='text-decoration: none;'> $categories</p></a ";
                echo $category;
            } else {
                echo "";
            }
            ?>
            <?php
            $categories = $blog['category'];
            if ($categories == 'DECORATE') {
                $category = " <p class='category'><a href='?controller=categories&action=searchCategory&category=decorate' style='text-decoration: none;'> $categories</p></a> ";
                echo $category;
            } else {
                echo "";
            }
            ?>

            <div id="social-media" style="dispaly:inline-block; "> <!--retrieve url links from user table-->
                <a href="<?php echo 'www.' . $blog['facebook_url']; ?>"><i class="fa read-fa fa-facebook" aria-hidden="true"></i></a>
                <a href="<?php echo 'www.' . $blog['insta_url']; ?>"><i class="fa read-fa fa-instagram" aria-hidden="true"></i></a>
                <a href="<?php echo 'www.' . $blog['twitter_url']; ?>"><i class="fa read-fa fa-twitter" aria-hidden="true"></i></a>
                <a href="?controller=blog&action=likes&blog_id=<?= $blog['blog_id'] ?>" style="text-decoration: none;"> 
                    <i onclick="myFunction(this)" class="fa fa-thumbs-o-up like" name="like"></i>
                </a>
                <span style="margin-left:4px; font-size:0.6em;"><?php echo $likes; ?></span>
            </div>

        </div>

        <!--        BLOG CONTENT-->
  
        
   <div class='read-blog-container'>
        <div id='body-container'> 
            <p class='body' id='body1'> 
               <?php $body = $blog['body'];
                echo $body; //echo nl2br($body);  ?> 
                </p>
                
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" ride='true'>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <?php  $blogimg = $blog['main_image'];
                $img =  "<img class='d-block w-100' src='".$blogimg."'  alt='First slide' style='width:50%' alt='blog image1'/>"; 
                echo $img; ?>
    </div>
    <div class="carousel-item">
     <?php $blogimg = $blog['second_image'];
                $img = "<img class='d-block w-100' src='".$blogimg ."'alt='Second slide' style='width:50%' alt='blog image2'/>";
                echo $img;?>
    </div>
    <div class="carousel-item">
      <?php  $blogimg = $blog['third_image'];
            $img = "<img class='d-block w-100' src=$blogimg alt='Third slide' style='width:50%' alt='blog image1'/>";
            echo $img; ?>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        </div>
        <div id='img_container r' class='row'> 
            <div id='main_image ' class='column'>
                
                
           </div>
            <div id='second_image ' class='column'> 
                
              
                
            </div>
        </div>

        <div class='third_image'> 
            
         
            

       </div>

 
        <?php foreach ($tag as $newtag) {
            ?>
            <div class="tags"> 
                <button class='tag-btn'><p class='tag'> <?php echo $newtag ?></p></button> <!-- will use a foreach function that will show the tag icon foreach tag-->
                <!-- will be populated with tags retrieved from the db-->
            </div>

        <?php } ?>

    </div>
<!--        COMMENTS-->
        
   <?php if(isset($_SESSION['loggedin'])) { 
     echo '       

        <div class="comment-container" style="width:52%;">
            <form method="POST" id="comment_form" action="">
                <div class="form-group">
                  <b>  <label for="exampleFormControlTextarea1" style="text-align: center; ">COMMENTS</label></b>
                    <textarea class="form-control" id="comment_content" rows="4" placeholder="write your comment here" name="comment_content"></textarea>
                </div>
                <div class="pure-form pure-form-aligned container-btn form-group">
                <input type="hidden" name="comment_id" id="comment_id" value="0"/>               
                    <input type="submit" value="comment" name= "submit" id="button" class="btn btn-info" style="float:right;" >
                </div>         
    </div>
    

 ' ;}  else {
     echo "<p style='text-align: center; color: #3F7CAC;'>Want to comment? "
     . "Why not<a href='?controller=register&action=registerUser' style='text-decoration: none; "
             . "text-transform:bold;'> sign up </a>and become a member or <a href='?controller=login&action=loginUser' "
             . "style='text-decoration: none; text-transform:bold;'> log in</a></p>";
 } endif; ?> 

<div class="comment-container" style="width:52%;">
            </form>
            <span id="comment_message"></span>
            <br/>
            <div id="display_comment">
             <div class="panel panel-default">
              
             </div>
                 
            </div>
        </div>

<?php ; ?>
