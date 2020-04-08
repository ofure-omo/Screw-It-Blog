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
        .blog-container{
            margin: auto;
            width: 60%;
            border: 0.2px solid black;
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

        #title {
            text-align: center;
            
        }

        .header-info {
            display: inline-block;
            margin-left: 20px;
            font-size: 0.9em;
            margin-top: 20px;
        }

        .body {
            margin-top: 20px;
            line-height: 1.8em;
            
        }


        .blog_tags {
            text-align: center;
            margin-top: 10px;
            
            font-size: 0.8em;
        }

        #comment-container {
            margin: auto;
            width: 60%;
            
            padding: 20px;
            margin-top: 50px;
            margin-bottom: 70px;

        }

        #social-media{
            
            margin-top: 50px;
            font-size: 1.3em;

        }

        .fa {
            padding: 10px;
            cursor: pointer;
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
        
        }


    </style> 

    <!--text to be replaced with data from the blog_post table -->
    <div class='blog-container'>
        <div id='title'>
            <h1><?php echo $blog['title']; ?></h1> <!--header section to retrieve data from db -->

            <p class='header-info'>Author: <?php echo $blog['user_id']; ?></p>
            <p class='header-info'>Date: <?php echo $blog['date_posted']; ?></p>
            <p class='header-info'>Category: <?php echo $blog['category']; ?></p> 

        </div>

        <div id="tags">
            <p class="blog_tags"><i class="fa fa-tags" aria-hidden="true">diy</i> <!-- will use a foreach function that will show the tag icon foreach tag-->
                <i class="fa fa-tags" aria-hidden="true">kitchen</i> 
                <i class="fa fa-tags" aria-hidden="true">dining</i></p> <!-- will be populated with tags retrieved from the db-->
        </div>

        <div id='body-container'> <!--main body section -->
            <p class='body'> <?php echo $blog['body']; ?></p>

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
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-pinterest"></i>
            <a href='#'><i class="fa fa-heart-o" onclick="myFunction(this)"></i> </a>


            <script>
                function myFunction(x) {
                    x.classList.toggle("fa-heart");
                }
            </script>
        </div>
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
   



