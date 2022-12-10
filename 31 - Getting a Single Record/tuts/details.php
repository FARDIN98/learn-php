<?php 

    include('config/db_connect.php');

    // check GET request id parameter
    if(isset($_GET['id'])){
        //mysqli_real_escape_string -> Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // make sql
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        // get the query result
        $result = mysqli_query($conn, $sql);

        // fetch the result in array format
        //mysqli_fetch_assoc -> Fetch the next row of a result set as an associative array
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        
    }




?>

<!DOCTYPE html>
<html lang="en">

<?php include 'templates/header.php' ?>


    <div class="container center">
        <?php if($pizza): ?>
            <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
            <p>Created by: <?php htmlspecialchars($pizza['email']); ?></p>
            <p> <?php echo date($pizza['created_at']); ?> </p>
            <h5>Ingredients: </h5>
            <p> <?php echo htmlspecialchars($pizza['ingredients']) ?> </p>
        <?php else: ?>
            <h6>No such pizza exist!</h6>
        <?php endif; ?>
    </div>


<?php include 'templates/footer.php' ?>

</html>