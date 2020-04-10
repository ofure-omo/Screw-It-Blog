<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>       
        <title> comments </title>
    </head>
<body>

    <style>
        .read-blog-container{
            margin: auto;
            width: 60%;
            padding: 20px;
            margin-top: 100px;
            margin-bottom: 50px;
        }
        
        .comment-container{
            margin: auto;
            width: 60%;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .read-header {
            text-align: center;
            font-size: 1.5em;
            
        }
        
        #read-title {
             font-family: 'Francois One', sans-serif;
        }

        .header-info {
            display: flex;
            display: inline;
            justify-content: space-around;
            margin-left: 20px;
            font-size: 0.7em;
            margin-top: 20px;
        }

        .body {
            margin-top: 20px;
            line-height: 1.8em;
            font-size: 0.95em;
        }
        
        #body1 {
            margin-top: 60px;
            
        }
        
        .tag {
            display: inline;           
            margin: 10px 10px;
            font-size: 0.65em;
            text-transform: uppercase;
        }
        
        .tag-btn {
            text-align: center;
            background: #ebebeb;
            border-radius: 5px;
            margin: 5px;
            margin-top: 30px;
            font-weight: bold;
            border-style: none;
            
        }
        
        .tag-btn:hover {
            background-color: #fca15f;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.12), 0 6px 20px 0 rgba(0, 0, 0, 0.05);
        }
        
        
        .tags{
            text-align: center;
             display: inline;
        }

        #comment-container {
            margin: auto;
            width: 60%;
            
            padding: 20px;
            margin-top: 50px;
            margin-bottom: 70px;

        }

        #socialmedia{
            
            margin-top: 50px;
            font-size: 1.3em;

        }

        .fa {
            padding: 10px;
            cursor: pointer;
            font-size: 0.3em;
        }

        .fa-heart-o {
            user-select: none;
            float: right;
            color: black;
        }

        .fa-heart-o:hover {
            color: red;
        }

        .row {
            display: flex;
        }

        .column {
            flex: 33.33%;
            padding: 10px;
            margin: 10px;
          
        }
        
        .third_image {   
        margin-bottom: 40px;
        }
        
        @media only screen and (max-width: 1000px) {
             .blog-container{
            
            width: 70%;

        }
         #read-title{
            font-size: 1.3em;   
        }
        
        .read-blog-container {
            margin-top: 30px;
            width: 85%;
        }
        
        .body {
            margin-top: 10px;
            line-height: 1.4em;
            font-size: 0.6em;
        }
        
        
        #body1 {
            margin-top: 30px;  
            text-align: center;
            
        }
        
        }


    </style> 

    <!--text to be replaced with data from the blog_post table -->
    <div class='read-blog-container'>
        <div class='read-header'>
            <h1 id="read-title"><?php echo $blog['title']; ?></h1> <!--header section to retrieve data from db -->

            <p class='header-info'>Written by: <?php echo $blog['user_fn'] . PHP_EOL . $blog['user_ln']; ?></p> <!--should be replaced with username based on the session id-->
            <p class='header-info'>Posted on: <?php $d = strtotime($blog['date_posted']); echo date('jS F Y', $d); ?></p>
            <p class='header-info'>Category: <?php echo $blog['category']; ?></p> 

        </div>

        <div id='body-container'> <!--main body section -->
            <p class='body' id="body1"> <?php echo $blog['body']; ?></p>

        </div>
        <div id='img_container r' class="row"> <!--grid for 2 images, that will be positioned side by side at at the same size, when viewing on phone they will lay on top of each other -->
            <div id='main_image ' class="column">
                <?php
                $blogimg = $blog['main_image'];
                $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%'/>";
                echo $img;
                ?>
            </div>
            <div id='second_image ' class="column">
                <?php
                $blogimg = $blog['second_image'];
                $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%'/>";
                echo $img;
                ?>
            </div>
        </div>
        <div id='body-container'> <!--body 2 section -->
            <p class='body'> <?php echo $blog['body2'] ?></p>
        </div>
        <div class='third_image'>
            <?php
            $blogimg = $blog['third_image'];
            $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%'/>";
            echo $img;
            ?>
         
        </div> 
        <div id="social-media"> <!--retrieve url links from user table-->
            <a href="<?php echo 'www.'. $blog['facebook_url']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="<?php echo 'www.'. $blog['insta_url']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="<?php echo 'www.'. $blog['twitter_url']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href='#'><i class="fa fa-heart-o" onclick="myFunction(this)"></i> </a>
            </div>
               <?php foreach ($tag as $newtag)
               {?>
            <div class="tags"> 
           <button class='tag-btn'><p class='tag'> <?php echo $newtag ?></p></button> <!-- will use a foreach function that will show the tag icon foreach tag-->
           <!-- will be populated with tags retrieved from the db-->
        </div>
          <?php } ?>


            <script>
                function myFunction(x) {
                    x.classList.toggle("fa-heart");
                }
            </script>
        
    </div>
    <div class='comment-container'>
        <form method="POST" id="comment_form">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1 comment" rows="3" placeholder="write your comment here" name="comment"></textarea>
            </div>
            <div class="pure-form pure-form-aligned container-btn">
                            <input type="submit" value="submit" name= "submit" id="button" class="button" >
                        </div> 
        
        </form>
        <span id="comment_message"></span>
        <br/>
        <div id=" "display_comment></div>
        </div>

</body>
</html>

<script> 
    $(document).ready(function() {
        $('#comment_form').on('submit', function(event){
          event.preventDefault();
          var form_data = $(this).serialize();
          $.ajax({
              url:"?controller=comments&action=add",
              method: "POST",
              data: form_data,
              dataType: "JSON",
              success:function (data)
              {
                  if(data.error !='')
                  {
                      $('#comment_form')[0].reset();
                      $('#comment_message').html(data.error);
                  }
              }
          })
        });
        });
    </script>
   



