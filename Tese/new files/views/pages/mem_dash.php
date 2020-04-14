<?php declare(strict_types = 1) ?>

</head>


<body>
    <div class="page-header">

    </div>
    <!--javascript function that triggers the hamburger menu when min-width is 480px-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.toogle').click(function () {
                    $('ul').toogleClass('active');
                })
                << << << < HEAD
        })
    </script>
    
    
<!------------accordion block -----------> 

<center>
<br>

<br>
<p> Welcome to your dashboard </p>
<h2><b><span style="color: #FCA15F;"><?= $details['username'] ?></span></b></h2>
<br>
<p style="font-size: 12px;">Member since
    <?php
    $d = strtotime($details['date_joined']);
    echo date("jS F Y", $d);
    ?>
<br>

<p><i class="fa fa-calendar"></i>    
    <?php
    echo date("jS F Y");
    ?>
</p>
<br>


<!-- Members details list --->

<button class="accordion" style="">View/Edit Your Details</button>
<div class="panel"> 
    <br>
    <table class="table table-striped" style="margin:20px;">
            
        <thead>

            <tr>
                <th>User ID</th>
                <th>Username</th>
                 <!--<th>Password</th>  not showing password??--> 
                <th>First Name</th>
                <th>Last Name</th> 
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>


                <th></th>
            </tr>
        </thead>
        <tbody>
             <tr>
                 <!-- this comes from the dashboard_controller -->
                <td><?= $details['user_id'] ?></td>
                <td><?= $details['username'] ?></td>
                <td><?= $details['user_fn'] ?></td>
                <td><?= $details['user_ln'] ?></td>
                <td><?= $details['dob'] ?></td>
                <td><?= $details['email'] ?></td>

                <td class="actions">
                    
                    <a href="?controller=dashboard&action=updateDetails&blog_id=<?= $details['user_id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <!--click button to delete controller, can it be deleted without a view as its just a button???
                    <delete button here<?php//$deleteUser ?> ></i></a>-->
                </td>
                <td><p>delete button <i class="fa fa-frown-o"></i> </p></td>
            </tr>
        </tbody>
    </table>
</div>
    
    
<!---favourite blog posts--->
<button class="accordion">Your Favourite Posts</button>
<div class="panel">
    <table class="table table-striped">
        
        <thead>

            <tr>
                <th>Date Posted</th>
                <th>Title</th>
                <th>Category</th>
                <th>Body</th>
                <th>View Post</th>
                 <!--<th>Password</th>  not showing password??--> 
                <th>Remove from favourites</th>
            </tr>
            
        </thead>
        
        
        
        <tbody>
            <?php
  
            foreach ($favourites as $favourite){
                echo "<tr>";
                
                $d = strtotime($favourite['date_posted']);
                echo "<td>".date("jS F Y", $d);

                echo "<td>".$favourite['title'];
                echo "<td>".$favourite['category'];
                
                $len = 40;
                if (strlen($favourite['body'])<$len) {
                    $bodyShort = $favourite['body'];
                    }
                else {
                    $bodyShort = substr($favourite['body'],0,$len); 
                }
                
                echo "<td>".$bodyShort;
                echo "<td><a href='?controller=blog&action=read&blog_id=".$favourite['blog_id']."'>Click here</a>";
                

                echo "</tr>";

            }
            ?>
         </tbody>
    </table>  
</div>

<!------------comments accordion block ----------->  

<button class="accordion">View / Edit Comments </button>
<div class="panel">     
    <table class="table table-striped">
        <tbody>
            <tr>
                <td><?php $comms['comment_date'] ?></td>
                <td><?php $comms['comment'] ?></td>
                <td><?php $comms['title'] ?></td>
                <td><button here <?=$deleteComment ?> </td>
            </tr>
            <tr>
                <td><?php $comms['comment_date'] ?></td>
                <td><?php $comms['comment'] ?></td>
                <td><?php $comms['title'] ?></td>
                <td><button here <?=$deleteComment ?> </td>
            </tr>
            <tr>
                <td><?php $comms['comment_date'] ?></td>
                <td><?php $comms['comment'] ?></td>
                <td><?php $comms['title'] ?></td>
                <td><button here <?=$deleteComment ?> </td>
            </tr>
            <tr>
                <td><?php $comms['comment_date'] ?></td>
                <td><?php $comms['comment'] ?></td>
                <td><?php $comms['title'] ?></td>
                <td><button here <?=$deleteComment ?> </td>
            </tr>


        </tbody>
    </table>
</div>



<!--- following list-->
<!-- removed as there are only 5 bloggers who can post
<button class="accordion">Bloggers you are following </button>
<div class="panel">     

    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Blogger 1 <!--pull through blogger's name could go here--> <!--</td>
                <td><?php //echo bloggers URL     ?></td>
                <td>Unfavourite button </td>
            </tr>
            <tr>
                <td>Blogger 2</td>
                <td><?php //echo bloggers URL    ?></td>
                <td>Unfavourite button</td>
            </tr>
            <tr>
                <td>Blogger 3</td>
                <td><?php //echo bloggers URL    ?></td>
                <td>Unfavourite button</td>
            </tr>
            <tr>
                <td>Blogger 4 </td>
                <td><?php //echo bloggers URL    ?></td>
                <td>Edit</td>
            </tr>


        </tbody>
    </table>
</div> -->


<!--- following list-->
<!-- removed as there are only 5 bloggers who can post
<button class="accordion">Bloggers you are following </button>
<div class="panel">     

    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Blogger 1 <!--pull through blogger's name could go here--> <!--</td>
                <td><?php //echo bloggers URL    ?></td>
                <td>Unfavourite button </td>
            </tr>
            <tr>
                <td>Blogger 2</td>
                <td><?php //echo bloggers URL   ?></td>
                <td>Unfavourite button</td>
            </tr>
            <tr>
                <td>Blogger 3</td>
                <td><?php //echo bloggers URL   ?></td>
                <td>Unfavourite button</td>
            </tr>
            <tr>
                <td>Blogger 4 </td>
                <td><?php //echo bloggers URL   ?></td>
                <td>Edit</td>
            </tr>


        </tbody>
    </table>
</div> 



</table>
</div>

</tbody>

</table>
</div> -->

</center>

        <script>
        <!------------JS for accordion block ----------->
        var acc = document.getElementsByClassName("accordion");
                    var i;
                    for (i = 0; i < acc.length; i++) 
                {
                        acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display !== 'none') {
                        panel.style.display = 'none';
                } else {
                    panel.style.display = 'block';
                }
            });
                     }
            
            

    var d = new Date();
    document.getElementById("date").innerHTML = d;
    </script>
</body>

