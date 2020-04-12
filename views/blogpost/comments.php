 <?php if(isset($_SESSION['loggedin'])) {
     echo "
 


        <div class='comment-container'>
            <form method='POST' id='comment_form' action=''>
                <div class='form-group'>
                    <label for='exampleFormControlTextarea1'>Comment</label>
                    <textarea class='form-control' id='exampleFormControlTextarea1 comment_content' rows='3' placeholder='write your comment here' name='comment_content'></textarea>
                </div>
                <div class='pure-form pure-form-aligned container-btn form-group'>
                    <input type='submit' value='COMMENT' name= 'submit' id='button' class='btn btn-info' style='float:right;' >
                </div>         
    
            </form>
            <span id='comment_message'></span>
            <br/>
            <div id='display_comment'></div>
        </div>


 " ;}  else {
     echo "<p style='text-align: center; color: #3F7CAC;'>Want to comment? Why not sign up and become a member!</p>";
 } ?>        