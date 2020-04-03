
<?php
/*Doing basic page design first, then will divide into MVC pages 

include '_____.php';  //login
include ('autoloader.php');
include '___.php'; //account page
include  other MVC relevant pages

 */ ?>


<!DOCTYPE html>

<html>

    <head>
        <title> Members' Dashboard </title>      
        <meta charset="UTF-8">
        <!--<link rel=stylesheet href=".css"> -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    </head>


    <body>
        <?php
        /* TEST
        session_start();
        $member1 = new Member('e.drew', 'Eris', 'Drew', 'edrew@t4t.com', '1989-01-01', '07111998633');
        */?>
        <div class="page-header">
            <h1><?php //echo $member1->welcome()  this would be member object when we finalise classes
                    //display their username, full name, DOB and email 
        ?></h1>
        </div>
            <!--javascript function that triggers the hamburger menu when min-width is 480px-->
            <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                $('.toogle').click(function () {
                $('ul').toogleClass('active');
                })
                })
            </script>
            <!------------favourite blog post  accordion block ----------->  
            <button class="accordion">Your Favourite Posts</button>
            <div class="panel">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Post 1 <!--date that post favourited could go here--> </td>
                            <td><?php //blogpost favourite 1 echo $favpost->getpost  ?></td>
                            <td>Unfavourite button </td>
                        </tr>
                        <tr>
                            <td>Post 2</td>
                            <td><?php //blogpost favourite 2 ?></td>
                            <td>Unfavourite button</td>
                        </tr>
                        <tr>
                            <td>Post 3</td>
                            <td><?php // ?></td>
                            <td>Unfavourite button</td>
                        </tr>
                        <tr>
                            <td>Post 4</td>
                            <td><?php // ?></td>
                            <td>Unfavourite button </td>
                        </tr>


                    </tbody>
                </table>  
            </div>




            <!------------comments accordion block ----------->  

            <button class="accordion">View / Edit  Comments </button>
            <div class="panel">     
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Comment 1 <!--date that post favourited could go here--> </td>
                            <td><?php //blogpost favourite 1 echo $favpost->getpost  ?></td>
                            <td>Edit/Delete button </td>
                        </tr>
                        <tr>
                            <td>Comment 2</td>
                            <td><?php //blogpost favourite 2 ?></td>
                            <td>Edit/Delete button</td>
                        </tr>
                        <tr>
                            <td>Comment 3</td>
                            <td><?php // ?></td>
                            <td>Edit/Delete button</td>
                        </tr>
                        <tr>
                            <td>Comment 4</td>
                            <td><?php // ?></td>
                            <td>Edit/Delete button</td>
                        </tr>


                    </tbody>
                </table>
            </div>



            <!--- starred bloggers list-->
            <button class="accordion">Your Favourite Bloggers </button>
            <div class="panel">     
         
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Blogger 1 <!--pull through blogger's name could go here--> </td>
                            <td><?php //echo bloggers URL  ?></td>
                            <td>Unfavourite button </td>
                        </tr>
                        <tr>
                            <td>Blogger 2</td>
                            <td><?php //echo bloggers URL ?></td>
                            <td>Unfavourite button</td>
                        </tr>
                        <tr>
                            <td>Blogger 3</td>
                            <td><?php //echo bloggers URL ?></td>
                            <td>Unfavourite button</td>
                        </tr>
                        <tr>
                            <td>Blogger 4 </td>
                            <td><?php //echo bloggers URL ?></td>
                            <td>Edit</td>
                        </tr>


                    </tbody>
                </table>
            </div>


            <!-- Members details list --->
            <button class="accordion">View/Edit Your Details</button>
            <div class="panel"> 
                <table class="table table-striped">
                    <tbody>    
                    <thead>

                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>First Name</th>
                            <th>Last Name</th> 
                            <th>Date of Birth</th>
                            <th>Email</th>

                            
                            <th></th>
                        </tr>
                        </thead>
                               
                                    <?php /*foreach ($userDetails as $user): ?>
                        <tr>
                            <td><?=  $user['user_ID'] ?></td>
                            <td><?= $user['user_UN'] ?></td>
                            <td> PASSWORD HASH </td>
                            <td><?= $user['user_FN'] ?></td>
                            <td><?= $user['user_SN'] ?></td>
                            <td><?= $user['user_DOB'] ?></td>
                             <td><?= $user['user_email'] ?></td>
                            
                            <td class="actions">
                                <!--insert update form here-->
                                <a href="userUpdate.php?user_ID=<?= $user['user_ID'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                      <?php endforeach; */ ?>
                        
                    </tbody>
                </table>
                </div>

                    </tbody>
                </table>
             </div>

        <script>
<!------------JS for accordion block ----------->
            var acc = document.getElementsByClassName("accordion");
            var i;
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>
    </body>
</html>
