<?php

    // MYSQLI -> My Sql improved or PDO -> php data objects
                         /*server name, username, password, database name*/
    $conn = mysqli_connect('localhost', 'shaun', 'test1234', 'ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    // make the query to the database and get the result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an associative array
    //mysqli_fetch_all -> Fetch all result rows as an associative array, a numeric array, or both
    //MYSQLI_ASSOC => Columns are returned into the array having the fieldname as the array index.
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // after we have done our query we should first of all free the results from memory. This is good practice. We don't have to do this in this project but its good practice we don't need this anymore.
    // free result from memory
    mysqli_free_result($result);

    // close connection 
    //mysql_close -> Closes a previously opened database connection
    mysqli_close($conn);

    // print_r($pizzas);

?>


<!DOCTYPE html>
<html>

    <?php include 'templates/header.php' ?>

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">
            <!-- we are referring to each individual pizza as we iterate through the array as a single pizza -->
            <?php foreach($pizzas as $pizza){ ?>

                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing){ ?>
                                    <li> <?php echo htmlspecialchars($ing) ?> </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">
                                more info
                            </a>
                        </div>
                    </div>
                </div>

            <?php }?>

        </div>
    </div>

    <?php include 'templates/footer.php' ?>
    

</html>