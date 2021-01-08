<?php
// postback.php -- v2


if( isset($_POST['FirstName']) ) { // show data

    // echo $_POST['FirstName'];

    // echo '<pre>';
    // var_dump($_POST); // dump everything that has been posted
    // echo '</pre>';

    echo "<p>Your name is: {$_POST['FirstName']}</p>";
    echo "<p>Your favorite color is: {$_POST['FavColor']}</p>";

    $favToppings = implode(', ', $_POST['FavPizzaToppings']);
    echo "<p>Your favorite pizza topping(s) is(are): $favToppings</p>";

} else { // show form

    echo '

        <form action="" method="POST">

            <p>First Name: <input type="text" name="FirstName" /></p>

            <fieldset>
                <legend>Favorite Color</legend>

                <p><input type="radio" name="FavColor" value="red" /> Red</p>
                <p><input type="radio" name="FavColor" value="blue" /> Blue</p>
                <p><input type="radio" name="FavColor" value="yellow" /> Yellow</p>
            
            </fieldset>

            <fieldset>
                <legend>Favorite Pizza Toppings</legend>

                <p><input type="checkbox" name="FavPizzaToppings[]" value="cheese" /> Cheese</p>
                <p><input type="checkbox" name="FavPizzaToppings[]" value="salami" /> Salami</p>
                <p><input type="checkbox" name="FavPizzaToppings[]" value="onions" /> Onions</p>
            
            </fieldset>

            <p><input type="submit" value="Submit" /></p>

        </form>
    
    ';

}
