<?php
// postback.php -- v2


if( isset($_POST['FirstName']) ) { // show data

    echo $_POST['FirstName'];

} else { // show form

    echo '

        <form action="" method="POST">        
            <p>First Name: <input type="text" name="FirstName" /></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
    
    ';

}
