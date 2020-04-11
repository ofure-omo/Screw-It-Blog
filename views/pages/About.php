<section class="main-section">
    <br>
    <h5>Hi, we are the Screw-it Bloggers! </h5>


                  <?php foreach ($bloggers as $profile) : ?>
    
                <img src="<?php echo $profile['profile_pic'] ?>" height="250" width="350" >     
                    <h5><?php echo $profile['user_fn'] . " " . $profile['user_ln'] ?></h5>
                    <p><?php echo $profile['bio'] ?><br>
                        <?php echo $profile['twitter_url'] ?><br>
                <?php echo $profile['insta_url'] ?><br>
                    <?php echo $profile['facebook_url'] ?><br>
                    <?php
                        $d = strtotime($profile['date_joined']);
                        echo "Joined " . date("jS F Y", $d) . "<br>";
                        ?></p><br>
            
            <?php endforeach; ?>
           
        
    </div>

</section>




      <div class="container">
    <div class="row">
     
                  <?php foreach ($bloggers as $profile) : ?>
         <div class="col-sm-4">
            <div class="card text-center">
                <img class="card-img-top" src="<?php echo $profile['profile_pic'] ?>" height="250" width="100%" >
                <div class="card-body">
                    <h5 class="card-title"><?php echo $profile['user_fn'] . " " . $profile['user_ln'] ?></h5>
                    <p class="card-text"><?php echo $profile['bio'] ?></p>  
                </div>
                <div class="card-footer">
                    <p class="text-muted"><?php
                        $d = strtotime($profile['date_joined']);
                        echo "Joined " . date("jS F Y", $d) . "<br>";
                        ?></p>
                </div>
                
            </div>
            <br>
            </div>
            <?php endforeach; ?>
           
        
    </div>
  </div>