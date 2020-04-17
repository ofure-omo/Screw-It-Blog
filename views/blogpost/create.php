<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="richtext.min.css">
<link rel="stylesheet" href="richtext.min.css">

<body>

    <style>
/*        .form-container{
            width: 50%;
            padding:0;
            margin-left: 150px;
            margin-top: 50px;
            position: relative;
        }*/

        h1 {
            margin-left: 150px;
            margin-top: 50px;
        }

        .title{
            text-align:center;
            margin-top:2.5rem;
            margin-bottom:2.5rem;
        }


        #Check1 {
            margin:auto;
            padding-left:29rem;        
        }

        #Check2 {
            margin:auto;
            padding-left:15rem;  
        }

        .checkall {
            margin-top:2rem;
        }

        .label1{
            padding-left:1rem;
            text-transform: uppercase;
            font-size: 1.2rem;
        }


        #template-container{
            margin: auto;
            width:50%;
        }
        
        .main-form{
            margin: auto;
            width:50%;
        }

        .next-btn{
            border: none;
            background-color: black;
            color: white;
            border-radius: 6px;
            margin-left: 42rem;
            padding: 8px 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .next-btn:hover{
            background-color: #3f7cac;
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
            margin-left: 270px;
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
            margin-right: 10px;
        }

        #template-container {

            margin-top: 50px;
        }

        .blog-container {
            margin-left: 170px;
            text-transform: uppercase;
            margin-bottom: 0;


        }
        
        .cat{
            width:30%;
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

        @media only screen and (max-width: 400px) {

            h1 {
                font-size: 1.5em;
                margin: auto;
                padding: auto;
                margin-top: 20px;
                margin-left:20px;
            }

            .blog-container {
                margin: auto;
                float:right;

            }
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

        <div class=' form-container'>
            <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
                    <h2 class="title">STEP 1: CHOOSE A LAYOUT</h2>
        <div class="layout">
        <div class="form-check form-check-inline" id="Check1">
            <input class="form-check-input" type="radio"  id="inlineRadio1 layout1" onclick="show2();" name="layout" value="1">
            <label class="form-check-label label1" for="inlineRadio1">layout 1</label>
        </div>
        <div class="form-check form-check-inline" id="Check2">
            <input class="form-check-input" type="radio" id="inlineRadio2 layout2"name="layout" onclick="show1();" value="2">
            <label class="form-check-label label1" for="inlineRadio2">layout 2</label>
        </div>
        </div>

        <div id="template-container" class="column">              
            <img src="views/images/layout.png" alt="layout 1" class="blog-template1"/>
        </div>
                    <h2 class="title">STEP 2: WRITE THE CONTENT</h2>
                    <div class="main-form">
                <div class="form-group">
                    <label for="formGroupExampleInput"><p><b>TITLE</b></p></label>
                    <input type="text" class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="formGroupExampleInput" name="title" placeholder="Title of your blog" required>
                </div>
                       
                <div class="form-group" id='body1'>
                    <label for="exampleFormControlTextarea1"><p><b>BODY</b></p></label>
                    <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded " id="exampleFormControlTextarea1" name="body" rows="20" placeholder="Body text" required></textarea>
                </div>
                        
                <div class="form-group hide" id="body2">
                    <label for="exampleFormControlTextarea1"><p><b>BODY 2</b></p></label>
                    <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="exampleFormControlTextarea1" name="body2" rows="10" placeholder="Body text" ></textarea>
                </div>

                <div class="form-group cat">
                    <label for="exampleFormControlSelect1"><p><b>CATEGORY</b></p></label>
                    <select class="form-control" name ="category" id="exampleFormControlSelect1" >
                        <option selected="selected">Choose a category</option>
                        <option value="CREATE">CREATE</option>
                        <option value="RENOVATE">RENOVATE</option>
                        <option value="DECORATE">DECORATE</option>

                    </select>
                </div>

                        <p><b> TAGS </b></p>
                <div class='checkbox-container '>

                    <div class="form-group form-check-inline " required>
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
                    <b>  <p class="img-title">IMAGES </p> </b>
                    <small class="file-type">Formats accepted: jpg/jpeg/png</small> 

                    <input type="hidden" 
                           name="MAX_FILE_SIZE" 
                           value="10000000" />

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload 3 images</label>
                        <input type="file" name="myfile[]" accept="image/*" class="form-control-file" id="exampleFormControlFile1" multiple >
                    </div>

                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="published" value="draft">
                        <label class="form-check-label" for="exampleCheck1">Save to drafts</label>
                    </div>
                    <div class="pure-form pure-form-aligned container-btn">
                        <input type="submit" value="SUBMIT" name= "submit" class="button" >
                    </div>  
                </div>
                </div>


            </form>
        </div>
    </span>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>

<script>
    
 function show2(){
  document.getElementById('body2').style.display = 'block';
}

function show1(){
  document.getElementById('body2').style.display ='none';
}
('.content').richText();


    </script>
    
    <script type="text/javascript">
$(document).ready( function() {
$("#txtEditor").Editor();                    
});
</script>
    
    

