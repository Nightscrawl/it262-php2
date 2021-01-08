<?php
// postback.php -- v2


if( isset($_POST['FirstName']) ) { // show data

    // echo $_POST['FirstName'];

    echo '<pre>';
    var_dump($_POST); // dump everything that has been posted
    echo '</pre>';

} else { // show form

    echo '

        <form action="" method="POST">        
            <p>First Name: <input type="text" name="FirstName" /></p>

            <p><input type="radio" name="FavColor" value="red" /> Red</p>
            <p><input type="radio" name="FavColor" value="blue" /> Blue</p>
            <p><input type="radio" name="FavColor" value="yellow" /> Yellow</p>

            <p><input type="submit" value="Submit" /></p>
        </form>
    
    ';

}
