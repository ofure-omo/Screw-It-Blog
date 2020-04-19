<body>

    <!--          HEADER       -->

    <div class='read-header'>


        <div class= 'main-header'>

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
            <p class='header-info' id ='author'>Written by:<a href='?controller=blogger&action=about' style='text-decoration: none;'> <?php echo $blog['username']; ?></a> <!--should be replaced with username based on the session id-->
                on the <?php
//                $d = strtotime($blog['date_posted']);
//                echo date('jS F Y', $d);
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
                <span style="margin-left:4px;"><?php echo $likes; ?></span>
            </div>

        </div>

        <!--        BLOG CONTENT-->

    </div>
    <div class='read-blog-container'>
        <div id='body-container'> <!--main body section -->
            <p class='body' id="body1"> <?php
                $body = $blog['body'];
                echo $body; //echo nl2br($body);   
                ?></p>

        </div>
        <div id='img_container r' class="row"> <!--grid for 2 images, that will be positioned side by side at at the same size, when viewing on phone they will lay on top of each other -->
            <div id='main_image ' class="column">
                <?php
                $blogimg = $blog['main_image'];
                $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%' alt='blog image1'/>";
                echo $img;
                ?>
            </div>
            <div id='second_image ' class="column">
                <?php
                $blogimg = $blog['second_image'];
                $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%' alt='blog image1'/>";
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
            $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%; margin-bottom: 30px;' alt='blog image1'/>";
            echo $img;
            ?>

        </div> 

        <div>
            <!--            <a href="#" style="float:right; margin-left:20px;" id="like-btn">Like</a>-->

        </div>
        <?php foreach ($tag as $newtag) {
            ?>
            <div class="tags"> 
                <button class='tag-btn'><p class='tag'> <?php echo $newtag ?></p></button> <!-- will use a foreach function that will show the tag icon foreach tag-->
                <!-- will be populated with tags retrieved from the db-->
            </div>

        <?php } ?>

    </div>
    <!--    COMMENTS-->

    <?php include_once "comments.php";
    ?>






</body>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<!--<script type="text/javascript">
                $(document).ready(function () {
                    $("#like-btn").click(function () {
                        $("#like-btn").css("color", "red");
                    });
                });


</script>-->
<script scr='text/javascript'>

                        function myFunction(x) {
                            x.classList.toggle("fa-thumbs-up");
                            alert('You\'ve liked this blogpost!');
                        }

                        $(document).ready(function () {

                            $('#comment_form').on('submit', function (event) {
                                event.preventDefault();
                                var form_data = $(this).serialize();
                                $.ajax({
                                    url: 'models/add_comment.php',
                                    method: 'POST',
                                    data: form_data,
                                    dataType: 'JSON',
                                    success: function (data) {
                                        if (data.error != '') {
                                            $('#comment_form')[0].reset();
                                            $('#comment_message').html(data.error);
                                        }
                                    }
                                });
                            });

                            $('#comment_id').val('0');
                            load_comment();

                            function load_comment() {

                                $.ajax({
                                    url: 'models/post_comment.php',
                                    method: 'POST',
                                    success: function (data) {
                                        $('#display_comment').html(data);
                                    }
                                });
                            }

                            $(document).on('click', '.reply', function () {
                                var comment_id = $(this).attr("id");
                                $('#comment_id').val(comment_id);
                                $('#comment_content').focus();
                            });

                        });



</script>

<style>

    .user {
        font-weight: bold;
        color: black;
    }

    .time {
        color: grey;
        font-size: 0.8em;
    }

    .user_comment {
        color: black;
    }

    .replies .comment {
        margin-top: 20px;
    }

    .replies {
        margin-left: 20px;
    }

    .read-blog-container{
        margin: auto;
        width: 65%;
        padding: 20px;
        margin-top: 10px;
    }

    .comment-container{
        margin: auto;
        width: 55%;
        margin-top: 70px;
        margin-bottom: 50px;
    }

    .read-header {
        text-align: center;
        font-size: 1.5em;
        margin: auto;
        width: 90%;
    }

    .avatar {
        vertical-align: middle;
        width: 70px;
        height: 70px;
        border-radius: 55%;
        margin-right: 20px;
        margin: auto;

    }

    #read-title {
        font-family: 'Playfair Display', serif;
        text-transform: uppercase;
        font-size: 45px;
        margin-bottom: 20px;
        margin-top: 30px;
    }

    .header-info {
        margin-left: 35px;
        margin-right: 35px;
        font-size: 0.45em;
        margin-top: 10px;
        text-align:center;
        font-style: italic;
    }

    .category {
        font-size: 0.5em;
        text-align: center;
    }

    .main-header{
        margin: auto;
        width: 80%;
        padding: 20px;

    }
    
    .body {
        margin-top: 10px;
        line-height: 2.5em;
        font-size: 0.95em;
    }

    #body1 {
        margin-top: 55px;

    }

    .tag {
        display: inline-block;           
        margin: 10px 10px;
        font-size: 0.7em;
        text-transform: uppercase;
    }

    .tag-btn {
        text-align: center;
        background: #ebebeb;
        border-radius: 5px;
        margin: 5px;
        margin-top: 30px;

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


    #social-media{
        font-size: 0.6em;

    }

    .read-fa {
        padding: 10px;
        cursor: pointer;
        font-size: 0.3em;
    }

    .like {

        cursor: pointer;
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
        margin-bottom: 20px;
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


