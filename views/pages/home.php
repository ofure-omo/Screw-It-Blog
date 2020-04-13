<body>
    
    
<center>
    <br>
    <br>
    
    <!-- LATEST BLOGS ---------------------------------------------------------->
    
            <?php //echo $count; ?>
            <?php //echo $test0->blog_id; ?>
        
            <?php  
            if (isset($_SESSION['loggedin'])) {
                echo "<div style='background-color: #FCB37E; margin-right: 75%; margin-left: 4%; color: black; padding:5px;'>";
                echo "<h3>Welcome</h3>" . $_SESSION['username'];
                echo "</div>";
            } 
            ?>
       

    
            <!-- HEADER -->  
            <div class="HP-carousel-caption" style="">
                <h3 style="">The <span style="color: #FCA15F">home</span> of DIY</h3>
            </div>
    
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:700px !important; padding-left: 80px; padding-right: 80px; padding-bottom: 80px; background-color: #fafafa"> <!-- keep inline to override bootstap using the # -->
            <br>
            <br>
            
            <!-- CAROUSEL -->     
            <div id="HP-carousel-inner" class="carousel-inner" style="height:650px !important">
                    
            <!-- blog 1 ----------------------------------------------------------->        
                    <!--TITLE-->
                    <div class="carousel-item active">
                        
                    <div class="HPCarousel-item-title" style="">
                            <h3 style=""><?php echo $blog1->titleShort ?></h3>
                            <p style="">
                                <?php echo $blog1->bodyLong ?>
                            </p>
                    </div> 
                        
                       
                    <!--IMAGE-->
                    <a href='?controller=blog&action=read&blog_id=<?php echo $blog1->blog_id;?>'>
                        <?php 
                        $img = "<img class='d-block w-100' src=$blog1->main_image alt='$blog1->title' style=''/>";
                        echo $img; 
                        ?>
                    </a>
                    </div>
                    
            <!-- blog 2 ----------------------------------------------------------->         

                   <!--TITLE-->
                    <div class="carousel-item">
                        
                    <div class="HPCarousel-item-title" style="">
                            <h3 style=""><?php echo $blog2->titleShort ?></h3>
                            <p style="">
                                <?php echo $blog2->bodyLong ?>
                            </p>
                    </div> 
                        
                        
                    <!--IMAGE-->
                    <a href='?controller=blog&action=read&blog_id=<?php echo $blog2->blog_id;?>'>
                        <?php 
                        $img = "<img class='d-block w-100' src=$blog2->main_image alt='$blog2->title' style=''/>";
                        echo $img; 
                        ?>
                    </a>
                    </div>

            <!-- blog 3 -----------------------------------------------------------> 
                    <!--TITLE-->
                    <div class="carousel-item">
                        
                    <div class="HPCarousel-item-title" style="">
                            <h3 style=""><?php echo $blog3->titleShort ?></h3>
                             <p style="">
                                <?php echo $blog3->bodyLong ?>
                            </p>
                    </div> 

                        
                    <!--IMAGE-->
                    <a href='?controller=blog&action=read&blog_id=<?php echo $blog3->blog_id;?>'>
                        <?php 
                        $img = "<img class='d-block w-100' src=$blog3->main_image alt='$blog3->title' style=''/>";
                        echo $img; 
                        ?>
                    </a>
                    </div>

            </div>
                
                    <!-- CONTROLS -->

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    
                    <p><br>&nbsp;<br></p>
                    
                    
            </div>
            <p style="background-color: #fafafa;"><br></p>
    

    <!-- CATEGORIES  -------------------------------------------------------------->
    <br><br>
    <div class="HP-caption" style="">
        <h3 style="">browse by <span style="color: #70d6ff">category</span></h3>
    </div>
            <br><br><br>
    
    <div class="categories">
    <!-- Category 1 --> 
    
        <div class="categories-container" style="">
            <div class = "categories-img">
            <a href="?controller=categories&action=searchCategory&category=<?php echo $category[0] ?>"><img class="cat-1" src="views/images/HP_images/<?php echo $category[0] ?>.png" alt="<?php echo $category[0] ?>"></a>
            </div>
            <div class = "categories-text">
                
            </div>
        </div>
        
    <!-- Category 2 --> 
        <div class="categories-container" style="">
            <div class = "categories-img">
            <a href="?controller=categories&action=searchCategory&category=<?php echo $category[1] ?>"><img class="cat-2" src="views/images/HP_images/<?php echo $category[1] ?>.png" alt="<?php echo $category[1] ?>"></a>
            </div>
            <div class = "categories-text">
                
            </div>
        </div>
    
    <!-- Category 3 --> 
        <div class="categories-container" style="">
            <div class = "categories-img">
            <a href="?controller=categories&action=searchCategory&category=<?php echo $category[2] ?>"><img class="cat-3" src="views/images/HP_images/<?php echo $category[2] ?>.png" alt="<?php echo $category[2] ?>"></a>
            </div>
            <div class = "categories-text">
                
            </div>
        </div>
    
    </div>
        
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            
 <!-- ALL BLOGS TILE GRID ---------------------------------------------------------->
  
    

<main>
    
    <!-- HEADING -->
    <div class="HP-caption" style="">
        <br><br>
        <h3 style="">be <span style="color: #3f7cac">inspired</span></h3>
        <br><br>
    </div>

	<div class="blog-container">

		<div class="gallery">
                    
                        <!-- 1:1 -->
			<div class="gallery-item" tabindex="0">
                            
                            <?php
                                if ($count<1){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog1->title/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog1->main_image alt=$blog1->title style=''/>";
                                }
                                echo $img;
                       
                            ?> 

                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog1->blog_id; ?>'>
                            
				<div class="gallery-item-info">

                                <!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog1->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog1->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog1->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>
			</div>

                        <!-- 1:2 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog2->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog2->main_image alt=$blog2->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog2->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog2->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog2->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog2->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>
			</div>

                        <!-- 1:3 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog3->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog3->main_image alt=$blog3->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog3->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog3->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog3->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog3->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>
			</div>

                        <!-- 2:1 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog4->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog4->main_image alt=$blog4->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                                <a href='?controller=blog&action=read&blog_id=<?php echo $blog4->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog4->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog4->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog4->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                                    
                                </a>

			</div>

                        <!-- 2:2 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog5->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog5->main_image alt=$blog5->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog5->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog5->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog5->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog5->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>

			</div>

                        <!-- 2:3 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog6->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog6->main_image alt=$blog6->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog6->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog6->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog6->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog6->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>

			</div>

                        <!-- 3:1 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog7->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog7->main_image alt=$blog7->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog7->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog7->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog7->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog7->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                                
                            </a>

			</div>

                        <!-- 3:2 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog8->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog8->main_image alt=$blog8->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog8->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog8->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog8->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog8->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                                
                            </a>

			</div>

                        <!-- 3:3 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog9->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog9->main_image alt=$blog9->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog9->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog9->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog9->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog9->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>

			</div>

                        <!-- 4:1 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog10->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog10->main_image alt=$blog10->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog10->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog10->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog10->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog10->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>

			</div>

                        <!-- 4:2 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog11->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog11->main_image alt=$blog11->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog11->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog11->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog11->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog11->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>

			</div>

                        <!-- 4:3 -->
			<div class="gallery-item" tabindex="0">

                            <?php
                                if ($count<2){
                                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog12->title style=' height: 10px;'/>";
                                } else {
                                    $img = "<img class='gallery-image' src=$blog12->main_image alt=$blog12->title style='background-size: cover;'/>";
                                }
                                echo $img; 
                                ?> 
                            
                            <a href='?controller=blog&action=read&blog_id=<?php echo $blog12->blog_id; ?>'>

				<div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog12->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog12->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog12->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php //echo $blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php //echo $blog1->comments?></li>

                                    </ul>

				</div>
                            </a>
			</div>


		</div>
		<!-- End of gallery -->

		<div class="loader"></div>

	</div>
	<!-- End of container -->
        
        <a href="?controller=categories&action=showAll">View All</a>

</main>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <a href="#">Back to Top</a>
    
   <!-- <script>
    window.onscroll = function(ev) {
    if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
        alert("you're at the bottom of the page");
    }
    };
    </script> -->
    
    
 
</center>

<?php
include_once "Footer.php";
?>

      <!-- For Image on Hover - probably need to move to a JS file -->   
    <script  type='text/javascript'>
        $(document).ready(function(){
            $(".cat-1").hover(
            function() {$(this).attr("style","filter: grayscale(100%);");},
            function() {$(this).attr("style","");
            });
        });
    
        $(document).ready(function(){
            $(".cat-2").hover(
            function() {$(this).attr("style","filter: grayscale(100%);");},
            function() {$(this).attr("style","");
            });
        });
        
        $(document).ready(function(){
            $(".cat-3").hover(
            function() {$(this).attr("style","filter: grayscale(100%);");},
            function() {$(this).attr("style","");
            });
        });
        
      
    </script>
</body>
</html>
