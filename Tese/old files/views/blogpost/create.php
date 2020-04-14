
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

                margin-top: 50px;
            }

            .blog-container {
                margin-left: 170px;
                text-transform: uppercase;
                margin-bottom: 0;


            }

            .img-title {
                margin-bottom: 0;
            }

            .file-type {
                padding-top: 20px;
            }

            #tags {
                margin-bottom: 20px;
            }

            small {
                font-size: 0.6em;
                font-style: italic;
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
                <img src="views/images/blogtemplate.png" alt="blog template" class="blog-template" >
            </div>
            <div class=' form-container'>
                <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Title</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Title of your blog" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Body</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="20" placeholder="Body text" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Body 2</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="body2" rows="7" placeholder="Body text" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Category</label>
                        <select class="form-control" name ="category" id="exampleFormControlSelect1" >
                            <option selected="selected">Choose a category</option>
                            <option value="CREATE">CREATE</option>
                            <option value="RENOVATE">RENOVATE</option>
                            <option value="DECORATE">DECORATE</option>

                        </select>
                    </div>

                        <p> Tags </p>
                        <div class='checkbox-container'>
                           
                        <div class="form-group form-check-inline" required>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[0]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[0]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[1]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[1]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[2]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[2]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[3]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[3]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[4]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[4]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[5]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[5]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[6]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[6]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[7]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[7]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[8]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[8]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[9]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[9]; ?></label>
                        </div>
                           
                    </div>
                    <div id='img_container'>
                        <p class="img-title"> Images </p> 
                        <small class="file-type">Formats accepted: jpg/jpeg/png</small> 

                        <input type="hidden" 
                               name="MAX_FILE_SIZE" 
                               value="10000000" />

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload 3 images</label>
                            <input type="file" name="myfile[]" class="form-control-file" id="exampleFormControlFile1" multiple >
                        </div>

                        <div class="pure-form pure-form-aligned container-btn">
                            <input type="submit" value="SUBMIT" name= "submit" class="button" >
                        </div>  
                    </div>

                        <script>

                            function onSelect(e) {
                                if (e.files.length > 3) {
                                    alert("Please select max 3 files.");
                                    e.preventDefault();
                                }
                            }
                        </script>
                </form>
            </div>
        </span>
    </body>


