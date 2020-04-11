<body>
    <?php
    $db = Db::getInstance();
//if (isset($_POST['add_comment'])){
//    $filteredComment = filter_input(INPUT_POST, 'add_comment', FILTER_SANITIZE_SPECIAL_CHARS);
//    $req = $db->prepare("INSERT INTO comments (user_id, blog_id, comment, comment_date) 
//                             VALUES ('".$_SESSION["user_id"]."', '".$blog['blog_id']."', ':comment', '".NOW()."');");
//    
//     $req->bindParam(':comment', $comment);
//     $comment = $filteredComment;
//    
//     $comment->execute();
    //exit('success');
//}
//    if(isset($_POST['add_comment'])) {
//        $comment = $db->real_escape_string($_POST['comment']);
//        
//        $db->query("INSERT INTO comments (user_id, blog_id, comment, comment_date)
//                             VALUES ('".$_SESSION["user_id"]."', '".$blog['blog_id']."', '$comment', '".NOW()."');");
//        exit('success');
//    }
    ?>
    <!--text to be replaced with data from the blog_post table -->
    <div class='read-blog-container'>
        <div class='read-header'>
            <h1 id="read-title"><?php echo $blog['title']; ?></h1> <!--header section to retrieve data from db -->

            <p class='header-info'>Written by: <?php echo $blog['user_fn'] . PHP_EOL . $blog['user_ln']; ?></p> <!--should be replaced with username based on the session id-->
            <p class='header-info'>Posted on: <?php
    $d = strtotime($blog['date_posted']);
    echo date('jS F Y', $d);
    ?></p>
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
            <a href="<?php echo 'www.' . $blog['facebook_url']; ?>"><i class="fa read-fa fa-facebook" aria-hidden="true"></i></a>
            <a href="<?php echo 'www.' . $blog['insta_url']; ?>"><i class="fa read-fa fa-instagram" aria-hidden="true"></i></a>
            <a href="<?php echo 'www.' . $blog['twitter_url']; ?>"><i class="fa read-fa fa-twitter" aria-hidden="true"></i></a>
            <a href='#'><i class="fa fa-heart-o" onclick="myFunction(this)"></i> </a>
        </div>
        <?php foreach ($tag as $newtag) {
            ?>
            <div class="tags"> 
                <button class='tag-btn'><p class='tag'> <?php echo $newtag ?></p></button> <!-- will use a foreach function that will show the tag icon foreach tag-->
                <!-- will be populated with tags retrieved from the db-->
            </div>
        <?php } ?>

        <a href='?controller=blog&action=update&blog_id=<?php echo $blog['blog_id'] ?>'>edit blogpost</a>


        <script>
            function myFunction(x) {
                x.classList.toggle("fa-heart");
            }
        </script>

    </div>
    <!--    <div class='comment-container'>
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
        </div>-->

    <!--    COMMENTS-->

    <div class="comment-container">
        <div class="comment-row">
            <div class="col-md-12">
                <label for="exampleFormControlTextarea1">Comment</label>
                <textarea class="form-control comment-form-control" id="exampleFormControlTextarea1 main_comment" rows="3" placeholder="write your comment here" ></textarea><br>
                <button style="float:right;"class="btn-primary btn" id="add_comment" name='add_comment'>Add comment </button><br>
            </div>
        </div>
        <div class="comment-row">
            <div class="col-md-12">
                <h4><b>355 comments</b></h4>
                <div class="user_comments">
                    <div class='comment'>
                        <div class='user'>Tese O <span class='time'>04/05/2020</span></div>
                        <div class='user_comment'>my comment</div>
                        <div class='replies'>
                            <div class='comment'>
                                <div class='user'>Tese O <span class='time'>04/05/2020</span></div>
                                <div class='user_comment'>my comment</div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script type="text/javascript">

            $(document).ready(function () {
                $('#add_comment').on('click', function () {
                    var comment = $('#main_comment').val();
                    if (comment !== " ") {
                        $.ajax({
                            url: 'pagetorun.php?controller=blog&action=read&blog_id=110',
                            method: 'POST',
                            dataType: 'text',
                            data: {
                                add_comment: 1,
                                comment: comment
                            }, sucesss: function (response) {
                                console.log(response);
                            }
                        });
                    } else
                        alert('check your inputs please');

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

    .read-fa {
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


