
                <div class="table-container-intro-dashboard" role="table" aria-label="">
                    <div class="flex-table-dashboard row" role="rowgroup">  
                        
                        <div class="flex-row-intro-dashboard" role="cell"> 
                        <img src="<?php echo $blogger['profile_pic'];?>" class="dashboard-img"   alt="profile">
                        </div>                        
                        
                        <div class="flex-row-intro-dashboard" id="blogger-name" role="cell"> 
                        <h1>Hello, <?php echo $blogger['user_fn'];?></h1>
                        <p><?php echo $blogs;?> blogs posted<br>
                        <?php echo $comments;?> comments sent</p>
                        </div> 

                  </div>
                </div>
            
            <div class="container">
            <div id="about" class="right">
                <h2>Profile Info</h2>
                <p>ID: <?= $blogger['user_id'] ?><br>
                First name: <?= $blogger['user_fn'] ?><br>
                Surname: <?= $blogger['user_ln'] ?><br>
                Username: <?= $blogger['username'] ?><br>
                Email: <?= $blogger['email'] ?><br>
                Date of Birth: <?php
                    $d = strtotime($blogger['dob']);
                    echo date("jS F Y", $d);
                    ?><br>
                Profile description: <?= $blogger['bio'] ?></p>
                <a href="" class="" id="edit_details">Edit details</a>
            </div>

            <div id="blogPosts" class="left">
                <div class="container" id="own_posts">
                    Your Blogs<!-- if writer: own posts -->
                </div>

                <div class="container" id="favourites">
                    Blogs you've favourited<!-- favourite posts -->
                </div>

                <div class="container" id="followers">
                    Bloggers you follow<!-- followers -->
                </div>

                <div class="container" id="followed">
                    <!-- followed members -->
                </div>

            </div>

 </div>      
                
                
            
        <div class="panel"> 
            <table class="table table-striped">
                <tbody>    
                <thead>

                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th> 
                        <th>Date of Birth</th>
                        <th>Email</th>
                        <th>User type</th>
                    </tr>
                </thead>

               
                    <tr>
                        <td><?= $blogger['user_id'] ?></td>
                        <td><?= $blogger['username'] ?></td>
                        <td><?= $blogger['user_fn'] ?></td>
                        <td><?= $blogger['user_ln'] ?></td>
                        <td><?= $blogger['dob'] ?></td>
                        <td><?= $blogger['email'] ?></td>
                        <td><?= $blogger['user_type'] ?></td>

                            </tbody>
            </table>
                            </div>

                    </tbody>
                   
