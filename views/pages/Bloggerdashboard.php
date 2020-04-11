
                <div class="table-container-intro-dashboard" role="table" aria-label="">
                    <div class="flex-table-dashboard row" role="rowgroup">  
                        
                        <div class="flex-row-intro-dashboard" role="cell"> 
                        <img src="<?php echo $blogger['profile_pic'];?>" class="dashboard-img"   alt="profile">
                        </div>                        
                        
                        <div class="flex-row-intro-dashboard" id="blogger-name" role="cell"> 
                        <h1>Hello, <?php echo $blogger['user_fn'];?></h1>
                        <p><?php echo $blogs;?> blogs posted</p>
                        </div> 
                        

                        
                  </div>
                </div>
            




                <div class="table-container-dashboard" role="table" aria-label="">
                    <div class="flex-table-dashboard row" role="rowgroup">  

                        
                        <div class="flex-row-dashboard" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="?controller=blog&action=create">
                                <div class="card-body-dashboard">
                                    <img class="acc-icon" src="Views/images/plus2.png"style="width: 70px;height: 70px;"/>
                                    <h2 class="card-title">Create a blog</h2>
                              </div>
                            </a>
                        </div></div>

                        
                        
                        
                         <div class="flex-row" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="?controller=blog&action=myblogs" >
                                <div class="card-body-dashboard">
                                    <img class="acc-icon" src="Views/images/edit.png"style="width: 70px;height: 70px;"/>   
                                    <h2 class="card-title">My blogs</h2>
                                </div></a>
                            </div>
                        </div>

                        
                        
                        
                        <div class="flex-row" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="#" >
                                <div class="card-body-dashboard">
                                      <img class="acc-icon"src="Views/images/settings.png"style="width: 70px;height: 70px;"/> 
                                    <h2 class="card-title">My profile</h2>
                                </div></a>
                            </div>
                        </div>



 </div>      <button class="accordion">View/Edit Your Details</button>
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
                        <th>User type</th>


                        <th></th>
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
                        <td><?= $blogger['profile_pic'] ?></td>

                         
                            </tbody>
            </table>
                            </div>

                    </tbody>
                   
</div>