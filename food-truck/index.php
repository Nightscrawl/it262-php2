<?php
// index.php for Petite Pizzas

include 'Pizza.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Petite Pizzas</title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <!-- <meta name="viewport" content="width=device-width,inital-scale=1.00" /> -->
        <meta name="robots" content="noindex,nofollow" />
        <link href="css/reset.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    
    <body>

        <div class="container">
        
            <header>
            
                <h1 class="title">Petite Pizzas</h1>
            
            </header>

            <div class="content">

                <div class="info">

                    <p>
                        Each of our pizzas is made to order on a petite 8-inch crust from fresh ingredients <br />
                        sourced daily from local markets around the city. A speedy convection oven allows your petite pie <br />
                        to be ready in minutes after ordering from one of our two trucks in the uptown and downtown areas.
                    </p>

                    <p>Hours: 11 a.m. - 5 p.m. every weekday.</p>

                    <p>Stop by for lunch or buy some pies to take home for dinner!</p>

                </div>


                <div class="order-box">
                
                    <div class="order">
                    
                        <form action="" method="POST">

                            <?php

                                foreach($pizzas as $pizza) {

                                    echo '
                                    
                                        <div class="pizza-box">
                                            <label for="'. $pizza->name .'">'. $pizza->name .'</label>
                                            <p>'. $pizza->description .'</p>
                                            <select name="'. $pizza->name .'" id="'. $pizza->name .'" required>
                                                <option value="0">Quantity</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>                            
                                        </div>';

                                    if( isset($_POST[$pizza->name]) && $_POST[$pizza->name] > 0 ) {

                                            $pizza->quantity = intval($_POST[$pizza->name]);

                                    }

                                }

                            ?>

                            <div><input type="submit" value="Order" /></div>    

                        </form>

                    </div> <!-- end order -->

                    <div class="total">

                        <h2>Total: 
                        <?php

                            $total = 0;

                            foreach($pizzas as $pizza) {

                                $cost = $pizza->price * $pizza->quantity;
                                $total = $total + $cost;

                            }

                            echo '$'. $total .'';

                        ?>
                        </h2>

              
                    
                    </div> <!-- end total -->
                
                </div> <!-- end order-box -->

            </div> <!-- end content -->


            <footer>

                <div>
                    &copy; 2021, Kira Abell. All Rights Reserved.
                </div>

                <div>
                    <a href="https://validator.w3.org/check/referer">HTML5</a> | 
                    <a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS3</a> | 
                    <a href="https://wave.webaim.org/refer">WAVE</a>
                </div>            
            
            </footer>
        
        
        </div> <!-- end container -->
    
    </body>
    
</html>
