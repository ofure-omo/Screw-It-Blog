<style>
    .about-container {
  position: relative;
  max-width: 400px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.about-container .content {
  position: absolute; /* Position the background text */
  bottom: -50; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.8); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}

.flex-container {
  /* We first create a flex layout context */
  display: flex;
  
  /* Then we define the flow direction 
     and if we allow the items to wrap 
   * Remember this is the same as:
   * flex-direction: row;
   * flex-wrap: wrap;
   */
  flex-flow: row wrap;
  
  /* Then we define how is distributed the remaining space */
  justify-content: space-around;
  
  padding: 0;
  margin: 0;
  list-style: none;
}
</style>

<section class="main-section">
    <br>
    <h5>Hi, we are the Screw-it Bloggers! </h5>


    <?php foreach ($bloggers as $profile) : ?>
    <div class="flex-container">
        <div class="about-container">
            <img src="<?php echo $profile['profile_pic'] ?>" width="100%"><br>     

            <div class="content">
                <h5><?php echo $profile['user_fn'] . " " . $profile['user_ln'] ?></h5>
                <p><?php echo $profile['bio'] ?><br><br>
                    <?php
                    $d = strtotime($profile['date_joined']);
                    echo "Started blogging on " . date("jS F Y", $d);
                    ?></p>
            </div>
        </div>
        <br>
    </div>
        <?php endforeach; ?>




</section>




<div class="container">
    <div class="row">

        <?php foreach ($bloggers as $profile) : ?>
            <div class="col-sm-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php echo $profile['profile_pic'] ?>" height="250" width="100%" >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $profile['user_fn'] . " " . $profile['user_ln'] ?></h5>
                        <p class="card-text"><?php echo $profile['bio'] ?></p>  
                        <p class="text-muted"><?php
                            $d = strtotime($profile['date_joined']);
                            echo "Blogging since " . date("F Y", $d) . "<br>";
                            ?></p>
                    </div>

                </div>
                <br>
            </div>
        <?php endforeach; ?>


    </div>
</div>