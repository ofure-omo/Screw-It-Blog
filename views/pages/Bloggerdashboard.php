
                <div class="table-container-intro-account" role="table" aria-label="">
                    <div class="flex-table-account row" role="rowgroup">  
                        
                        <div class="flex-row-intro-account" id="blogger-name" role="cell"> 
                        <h1>Hello, <?php $blogger=BloggerController::blogger();echo $blogger['user_fn'];?> !</h1>  
                        </div> 
                        
                        <div class="flex-row-intro-account" role="cell"> 
                        <img src="Views/<?php $blogger=BloggerController::blogger();echo $blogger['profile_pic'];?>" class="account-img"   alt="...">
                    
                        </div> 
                        
                  </div>
                </div>
            




                <div class="table-container-account" role="table" aria-label="">
                    <div class="flex-table-account row" role="rowgroup">  

                        
                        <div class="flex-row-account" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="?controller=blog&action=create">
                                <div class="card-body-account">
                                    <img class="acc-icon" src="Views/images/plus2.png"style="width: 70px;height: 70px;"/>
                                    <h2 class="card-title">Create a blog</h2>
                              </div>
                            </a>
                        </div></div>

                        
                        
                        
                         <div class="flex-row" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="?controller=blog&action=myblogs" >
                                <div class="card-body-account">
                                    <img class="acc-icon" src="Views/images/edit.png"style="width: 70px;height: 70px;"/>   
                                    <h2 class="card-title">My blogs</h2>
                                </div></a>
                            </div>
                        </div>

                        
                        
                        
                        <div class="flex-row" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="#" >
                                <div class="card-body-account">
                                      <img class="acc-icon"src="Views/images/settings.png"style="width: 70px;height: 70px;"/> 
                                    <h2 class="card-title">Account details</h2>
                                </div></a>
                            </div>
                        </div>



 </div>
                   
</div>