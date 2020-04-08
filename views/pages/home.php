<body>
    
    
<center>
    <br>
    <br>
    
    <!-- LATEST BLOGS -->
    
    
            <div class="HP-carousel-caption" style="z-index: 10; color: grey; opacity: 0.7;">
                <h3 style="padding: 10px; text-indent: 30px; font-size: 35px; font-family: 'Open Sans', sans-serif;">The <span style="color: #FCA15F">home</span> of DIY</h3>
            </div>
    
        <br>

    
             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:700px !important; padding-left: 80px; padding-right: 80px; background-color: #fafafa">
                 <br>
                 <br>
                <!-- CAROUSEL -->     
                <div class="carousel-inner" style="height:650px !important">
                    
                    <!-- BLOG 1 --> 
                    <div class="carousel-item active">
                        <!--CAPTION-->
                        <div style="position: absolute; z-index: 10; color: black; background-color: white; top:350px; right:150px; opacity: .55; width: 450px; border-radius: 15px">
                            <h3 style="font-size: 32px; font-family: 'Open Sans', sans-serif;"><?php echo $blog1title ?></h3>
                        </div> 
                        
                         <!--BLOG TEXT-->
                        <div style="position: absolute; z-index: 10; color: black; background-color: white; top:400px; right:150px; opacity: .55;width: 450px; height: 200px; border-radius: 15px ">
                            <p style="font-size: 14px; padding: 5px"><br>
                                    <?php echo $blog1text ?>
                                 <a href='?controller=blog&action=read&blog_id=<?php echo $blogid?>'> <br>Read more....</a></p>
                        </div> 
                        
                        <!--IMAGE-->
                        <?php 
                       $img = "<img class='d-block w-100' src=$blogimage alt='First slide' style='width:100%'/>";
                       echo $img; 
                       
                               ?>
              
                    
                   

                    </div>

                    <!-- BLOG 2 --> 
                    <div class="carousel-item">
                        <div style="position: absolute; z-index: 10; color: black; background-color: white; top:350px; right:150px; opacity: .6; width: 450px; border-radius: 15px">
                            <h3 style="font-size: 32px">PLACEHOLDER: blog title 2</h3>
                        </div> 
                        <div style="position: absolute; z-index: 10; color: black; background-color: white; top:400px; right:150px; opacity: .6;width: 450px; height: 200px; border-radius: 15px; text-align: center">
                                 <p style="font-size: 14px; padding: 5px"><br>
                                    PLACEHOLDER: blog text 2<br>
                                    PLACEHOLDER: blog text 2<br>
                                    PLACEHOLDER: blog text 2<br>
                                 <a href='?controller=blog&action=read&id=<?php echo $blogid; ?>'>Read more....</a></p>
                        </div> 
                        <img class="d-block w-100" src="https://images-na.ssl-images-amazon.com/images/I/71V-COkrJcL._SL1500_.jpg" alt="Second slide" style="heigh">
                    </div>

                    <!-- BLOG 3--> 
                    <div class="carousel-item">
                        <div style="position: absolute; z-index: 10; color: black; background-color: white; top:350px; right:150px; opacity: .6; width: 450px; border-radius: 15px">
                            <h3 style="font-size: 32px">PLACEHOLDER: blog title 3</h3>
                        </div> 
                        <div style="position: absolute; z-index: 10; color: black; background-color: white; top:400px; right:150px; opacity: .6;width: 450px; height: 200px; border-radius: 15px ">
                                <p style="font-size: 14px; padding: 5px"><br>
                                    PLACEHOLDER: blog text 3<br>
                                    PLACEHOLDER: blog text 3<br>
                                    PLACEHOLDER: blog text 3<br>
                                <a href="https://www.google.com">Read more....</a></p>
                        </div> 
                            <img class="d-block w-100" src="https://www.organicauthority.com/.image/t_share/MTU5MzMwNjM3NzM1MDExNTQy/staircase-ideas.jpg" alt="Third slide" style="">

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
                    
                    
            </div>
    

    <!-- CATEGORIES--> 
    <br>
    <br>
    <div class="HP-categories-caption" style="z-index: 10; color: grey; opacity: 0.7">
        <h3 style="padding: 10px; text-indent: 30px; font-size: 35px; font-family: 'Open Sans', sans-serif; background-color: #FDFDFD">browse by <span style="color: #70d6ff">category</span></h3>
    </div>
            <br>
            <br>
            <br>

    
    <!-- IMAGES-->
  
    <div class = "categories-div">
        <img class="HPCategories" src="views/images/HP_images/kitchen.png" style="width:10%; padding: 5px;" alt="kitchen">
        <img class="HPCategories2" src="views/images/HP_images/dining.png" style="width:10%; padding: 5px" alt="dining">
        <img class="HPCategories3" src="views/images/HP_images/office.png" style="width:10%; padding: 5px" alt="office">
        <img class="HPCategories4" src="views/images/HP_images/living.png" style="width:10%; padding: 5px" alt="living room">
        <img class="HPCategories5" src="views/images/HP_images/bedroom.png" style="width:10%; padding: 5px" alt="bedroom">
        <img class="HPCategories6" src="views/images/HP_images/bathroom.png" style="width:10%; padding: 5px" alt="bathroom">
        <img class="HPCategories7" src="views/images/HP_images/garden.png" style="width:10%; padding: 5px" alt="garden">
        <img class="HPCategories8" src="views/images/HP_images/lifestyle.png" style="width:10%; padding: 5px" alt="lifestyle">
    </div>
    
            <br>
            <br>
            <br>
            <br>
            <br>
    
            
  <!-- All blog posts-->
  
  <main>
      <br>
        <div class="HP-all-caption" style="z-index: 10; color: grey; opacity: 0.7;">
            <h3 style="padding: 10px; text-indent: 30px; font-size: 35px; font-family: 'Open Sans', sans-serif;">be <span style="color: #3f7cac">inspired</span></h3>
        </div>
      

      <br>
      <br>

	<div class="container">

		<div class="gallery">

                <!-- 1:1 -->
			<div class="gallery-item" tabindex="0">
                        <!-- image -->
                        <!--IMAGE-->
                        <?php 
                       $img = "<img class='d-block w-100' src=$blogimage alt='First slide' style='width:100%'/>";
                       echo $img; 
                       ?> 
                         <a href='?controller=blog&action=read&blog_id=<?php echo $blogid; ?>'>
                        <!-- Likes and Comments -->
                        <div class="gallery-item-info">
                            <ul>
                                <li class="gallery-item-body"><span class="visually-hidden">Body:</span><i class="fas fa-heart" aria-hidden="true"></i><?php echo $blog1title ?></li>
                                <!-- likes -->
                                <li class="HP-catagories-gallery-item-likes">
                                    <span class="visually-hidden">Likes:</span>
                                        <i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                                <!-- comments-->
                                <li class="HP-catagories-gallery-item-comments">
                                    <span class="visually-hidden">Comments:</span>
                                    <i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                            </ul>
                        </div>
                         </a>
			</div>

                <!-- 1:2 -->
			<div class="gallery-item" tabindex="0">
                        <!-- image -->
			<img src="https://images.unsplash.com/photo-1496678518751-46244eef08c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="gallery-image" alt="">
                        <div class="gallery-item-info">
                            <ul>
                                <!-- likes -->
                                <li class="gallery-item-likes">
                                    <span class="visually-hidden">Likes:</span>
                                    <i class="fas fa-heart" aria-hidden="true"></i> 89</li>
                                <!-- comments-->
				<li class="gallery-item-comments">
                                    <span class="visually-hidden">Comments:</span>
                                    <i class="fas fa-comment" aria-hidden="true"></i> 5</li>
                            </ul>
                        </div>
                        </div>

                
                <!-- 1:3 -->
			<div class="gallery-item" tabindex="0">
                        <!-- image -->
                        <img src="https://images.unsplash.com/photo-1512331283953-19967202267a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="gallery-image" alt="">
                        <div class="gallery-item-info">
                            <ul>
                                <!-- likes -->
				<li class="gallery-item-likes">
                                    <span class="visually-hidden">Likes:</span>
                                    <i class="fas fa-heart" aria-hidden="true"></i> 42</li>
                                <!-- comments-->
				<li class="gallery-item-comments">
                                    <span class="visually-hidden">Comments:</span>
                                    <i class="fas fa-comment" aria-hidden="true"></i> 1</li>
                            </ul>
                        </div>
                        </div>

                <!-- 1:4 -->
			<div class="gallery-item" tabindex="0">
                        <!-- image -->
			<img src="https://images.unsplash.com/photo-1584143257261-e16224e2c9df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80" class="gallery-image" alt="">
                        <div class="gallery-item-info">
			<ul>
                            <!-- likes -->
                            <li class="gallery-item-likes">
                                <span class="visually-hidden">Likes:</span>
                                <i class="fas fa-heart" aria-hidden="true"></i> 38</li>
                            <!-- comments-->
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
                        </ul>
                        </div>
                        </div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1505394033641-40c6ad1178d7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=806&q=80" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 47</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1536236155319-1edab471917c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
                                                <li class="gallery-item-body"><span class="visually-hidden">Body:</span><i class="fas fa-heart" aria-hidden="true"></i> Some Blog Text here</li>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 94</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 3</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1512917733829-196bc8ea404a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 52</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 4</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1521334884684-d80222895322?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 66</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1496449903678-68ddcb189a24?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 45</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1518481612222-68bbe828ecd1?w=500&h=500&fit=crop" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 34</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1518226203301-8e7f833c6a94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 41</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1503278501277-e50457741130?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 30</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul>

				</div>

			</div>

		</div>
		<!-- End of gallery -->

		<div class="loader"></div>

	</div>
	<!-- End of container -->

</main>
    <br>
    <br>
    <br>
    <br>
    <br>
    
 
</center>

<?php
include_once "Footer.php";
?>

    <!-- For Image on Hover - probably need to move to a JS file -->   
    <script  type='text/javascript'>
    $(document).ready(function(){
    $(".HPCategories").hover(
        function() {$(this).attr("src","views/images/HP_images/kitchen_h.png");},
        function() {$(this).attr("src","views/images/HP_images/kitchen.png");
        });
    });
    
        $(document).ready(function(){
        $(".HPCategories2").hover(
        function() {$(this).attr("src","views/images/HP_images/dining_h.png");},
        function() {$(this).attr("src","views/images/HP_images/dining.png");
        });
        });
        
        $(document).ready(function(){
        $(".HPCategories3").hover(
        function() {$(this).attr("src","views/images/HP_images/office_h.png");},
        function() {$(this).attr("src","views/images/HP_images/office.png");
        });
        });
        
        $(document).ready(function(){
        $(".HPCategories4").hover(
        function() {$(this).attr("src","views/images/HP_images/living_h.png");},
        function() {$(this).attr("src","views/images/HP_images/living.png");
        });
        });
        
        $(document).ready(function(){
        $(".HPCategories5").hover(
        function() {$(this).attr("src","views/images/HP_images/bedroom_h.png");},
        function() {$(this).attr("src","views/images/HP_images/bedroom.png");
        });
        });
        
        $(document).ready(function(){
        $(".HPCategories6").hover(
        function() {$(this).attr("src","views/images/HP_images/bathroom_h.png");},
        function() {$(this).attr("src","views/images/HP_images/bathroom.png");
        });
        });
        
        $(document).ready(function(){
        $(".HPCategories7").hover(
        function() {$(this).attr("src","views/images/HP_images/garden_h.png");},
        function() {$(this).attr("src","views/images/HP_images/garden.png");
        });
        });
        
        $(document).ready(function(){
        $(".HPCategories8").hover(
        function() {$(this).attr("src","views/images/HP_images/lifestyle_h.png");},
        function() {$(this).attr("src","views/images/HP_images/lifestyle.png");
        });
        });
    </script>
</body>
</html>
