<?php declare(strict_types=1) ?>

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
    })
</script>
<!------------accordion block ----------->  
<!-- Members details list --->
<button class="accordion">View/Edit Your Details</button>
<div class="panel"> 
    <table class="table table-striped">
        <tbody>    
        <thead>

            <tr>
                <th>User ID</th>
                <th>Username</th>
                 <!--<th>Password</th>  not showing password??--> 
                <th>First Name</th>
                <th>Last Name</th> 
                <th>Date of Birth</th>
                <th>Email</th>


                <th></th>
            </tr>
        </thead>
        </tbody>
        <tbody>
            <tr>
                <td><?= $details['user_id'] ?></td>
                <td><?= $details['username'] ?></td>
                <td><?= $details['user_fn'] ?></td>
                <td><?= $details['user_ln'] ?></td>
                <td><?= $details['dob'] ?></td>Ï
                <td><?= $details['email'] ?></td>

                <div class="actions">
                    <a href="userUpdate.php?user_id=<?= $details['user_id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <!--click button to delete controller, can it be deleted without a view as its just a button???-->
                </div>
                    <div class="row">
        <button id="delete-btn" onclick="deleteAccount(<?php echo $details['user_id']; ?>)"><i class="fas fa-trash-alt"></i> Delete Account</a></button>
      <input type="submit" value="Update">
    </div>

        </tbody>
</div>
<!---favourite blog posts--->
<button class="accordion">Your Favourite Posts</button>
<div class="panel">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td><?php $favourites['date_posted'] ?></td>
                <td><?php $favourites['title'] ?></td>
                <td><button here <?= $unfavourite ?> </td>
            </tr>
            <tr>
                <td><?php $favourites['date_posted'] ?></td>
                <td><?php $favourites['title'] ?></td>
                <td><button here <?= $unfavourite ?> </td>
            </tr>
            <tr>
                <td><?php $favourites['date_posted'] ?></td>
                <td><?php $favourites['title'] ?></td>
                <td><button here <?= $unfavourite ?> </td>
            </tr>
            <tr>
                <td><?php $favourites['date_posted'] ?></td>
                <td><?php $favourites['title'] ?></td>
                <td><button here <?= $unfavourite ?> </td>
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
                <td><?php $comms['comment_date'] ?></td>
                <td><?php $comms['comment'] ?></td>
                <td><?php $comms['title'] ?></td>
                <td><button here <?= $deleteComment ?> </td>
            </tr>
            <tr>
                <td><?php $comms['comment_date'] ?></td>
                <td><?php $comms['comment'] ?></td>
                <td><?php $comms['title'] ?></td>
                <td><button here <?= $deleteComment ?> </td>
            </tr>
            <tr>
                <td><?php $comms['comment_date'] ?></td>
                <td><?php $comms['comment'] ?></td>
                <td><?php $comms['title'] ?></td>
                <td><button here <?= $deleteComment ?> </td>
            </tr>
            <tr>
                <td><?php $comms['comment_date'] ?></td>
                <td><?php $comms['comment'] ?></td>
                <td><?php $comms['title'] ?></td>
                <td><button here <?= $deleteComment ?> </td>
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
                <td><?php //echo bloggers URL               ?></td>
                <td>Unfavourite button </td>
            </tr>
            <tr>
                <td>Blogger 2</td>
                <td><?php //echo bloggers URL              ?></td>
                <td>Unfavourite button</td>
            </tr>
            <tr>
                <td>Blogger 3</td>
                <td><?php //echo bloggers URL              ?></td>
                <td>Unfavourite button</td>
            </tr>
            <tr>
                <td>Blogger 4 </td>
                <td><?php //echo bloggers URL              ?></td>
                <td>Edit</td>
            </tr>


        </tbody>
    </table>
</div> -->



</table>
</div>

</tbody>


<!--- following list-->
<!-- removed as there are only 5 bloggers who can post
<button class="accordion">Bloggers you are following </button>
<div class="panel">     

    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Blogger 1 <!--pull through blogger's name could go here--> <!--</td>
                <td><?php //echo bloggers URL              ?></td>
                <td>Unfavourite button </td>
            </tr>
            <tr>
                <td>Blogger 2</td>
                <td><?php //echo bloggers URL             ?></td>
                <td>Unfavourite button</td>
            </tr>
            <tr>
                <td>Blogger 3</td>
                <td><?php //echo bloggers URL             ?></td>
                <td>Unfavourite button</td>
            </tr>
            <tr>
                <td>Blogger 4 </td>
                <td><?php //echo bloggers URL             ?></td>
                <td>Edit</td>
            </tr>


        </tbody>
    </table>
</div> -->



</table>
</div>

</tbody>

</table>
</div>

        <script>
            <!------------JS for accordion block ----------->
                    var acc = document.getElementsByClassName("accordion");
                var i;
            for (i = 0; i < acc.length; i++) 


            {
                                acc[i].addEventListener("click", function () {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.display === "block") {
                                panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
                function deleteAccount(id) {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("GET", "?controller=blogger&action=delete&user_id=" + id, true);
                    xmlhttp.send();
                    goBackToHome();
                }
                function goBackToHome() {
                    window.refresh;
                    window.location.href = "?controller=home&action=home";
                }
                    }
                
                    
                    
                    
                    
                    
                    
                    
                    
            

                  
                    </script>
</body>

