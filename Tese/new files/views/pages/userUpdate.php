

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <title>Update your details</title>

    
    </head>
    <body>


<div class="add-form"> 
               
    <center>
        <br>
        <h2>Update Your Details</h2>
    </center>   
         

              
                
                
                <form name="updateUser" class="updateUser" id="updateUser" action = "" method = "POST">

                    
                <div class="form-group">
                <div class="row">
                <div class="col">
                First Name:<input  type="text" class="form-control" placeholder="First Name"  name="firstName" id="firstName" value="<?=$details['user_fn']?>" autofocus/>              
                </div> 
                <div class="col">
                Last Name:<input  type="text" class="form-control" placeholder="Last Name"  name="lastName" id="lastName" value="<?=$details['user_ln']?>" />        
              </div>
                </div></div>
                <br/>
                
                
                
                <div class="form-group">
                <div class="row">
                <div class="col">
                User Name:<input  type="text" class="form-control" placeholder="Username"  name="userName" id="userName" value="<?=$details['username']?>" />          
                   </div> 
                <div class="col">
                Email:<input  type="text" class="form-control" placeholder="Email"  name="email" id="email" value="<?=$details['email']?>" />        
              </div>
                </div></div>
                <br/>
                
                
               <div class="form-group">
                <div class="row">
                <div class="col">
                Date of Birth:<input  type="text" class="form-control" placeholder="Date of Birth"  name="dob" id="dob" value="<?=$details['dob']?>" />          
                   </div> 
                <div class="col">
                Bio.:<input  type="text" class="form-control" placeholder="Bio"  name="Bio" id="bio" value="<?=$details['bio']?>" />        
              </div>
                </div></div>
                <br/> 
               
                

                
              
           <input type="submit" value=" Update details " name="updateMem" id="submit-button" class="btn btn-primary" onclick="clearField()" />

                </form> 
                </div>
    </body>
</html>
