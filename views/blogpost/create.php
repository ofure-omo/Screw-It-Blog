<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="ajaxreq.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    
    </head>
    <body>

        <style>
            .form-container{
                width: 40%;
                margin-left: 150px;
                margin-top: 50px;
            }

            h1 {
                margin-left: 150px;
                margin-top: 50px;
            }

            #customFile{
                cursor: pointer;
            }

            .button {
               
                border: none;
                color: white;
                padding: 10px 30px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                display: inline-block;
                font-size: 16px;
                margin-top: 30px;
                margin-bottom: 30px;
                margin-left: 200px;
                cursor: pointer;
                background-color: black;
                border-radius: 7px;
                font-weight: bolder;
            }       

            .button:hover {
                color: white;
                background-color: #3f7cac;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .container-btn {
                
            }
            
            .img-upload {
                margin-bottom: 10px;
            }
            
            .blog-template {
                float: right; 
                height: 800px;
                margin-right: 150px;
            }
            
            #template-container {
                float:right;
                margin-top: 50px;
            }
            
            .blog-container {
                margin-left: 170px;
                text-transform: uppercase;
                margin-bottom: 0;
                
            }
            

        </style>
        <!--<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
           
          <h2>Add New Item</h2>
       </div>
           <p>
               <input class="w3-input" type="text" name="name" required autofocus>
               <label>Name</label>
           </p>
               <p>
               <input class="w3-input" type="text" name="price" required>
               <label>Price</label>
           </p>
                   
         <input type="hidden" 
                  name="MAX_FILE_SIZE" 
                value="10000000"
                />
       
         <input type="file" name="myUploader" class="w3-btn w3-pink" required />
         <p>
           <input class="w3-btn w3-pink" type="submit" value="Add Product">
         </p>
       </form>-->
        <h1>Fill in the following form to create a new blog post</h1>

        <span>
            <div id="template-container">
                <p class="blog-container"> blog template </p>
                <img src="blogtemplate.png" alt="blog template" class="blog-template" >
            </div>
        <div class=' form-container'>
            <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title of your blog" autofocus required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Body</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="20" placeholder="Blog entry" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Body 2</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Blog entry 2" required></textarea>
                </div>
                <div id='img_container'>
                    <p> Images </p> 
                  <p>Format accepted jpg</p> 

            <input type="hidden" 
                   name="MAX_FILE_SIZE" 
                   value="10000000" />

            <div class='img-upload'>
                <span> Image 1 </span>
               <input type="file" name="myUploader" required/>
                <input type="submit" value="UPLOAD"/>
            </div>
            <div class='img-upload'>
                <span> Image 2 </span>
                <input type="file" name="myfile" required/>
                <input type="submit" value="UPLOAD"/>
            </div>
            <div class='img-upload'>
                <span> Image 3 </span>
                <input type="file" name="myfile" required/>
                <input type="submit" value="UPLOAD"/>
                </div>
       
            <div class="pure-form pure-form-aligned container-btn">
                <input type="submit" value="SUBMIT" name= "submit" class="button" >
                    </div>        
                   <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose a file</label> <small> Formats accepted png/jpeg/jpg/pdf </small>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose a file</label> <small> Formats accepted png/jpeg/jpg/pdf </small>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose a file</label> <small> Formats accepted png/jpeg/jpg/pdf </small>
                    </div>
                    -->
              
            </form>
            
        </div>
                </span>
    </body>
</html>

