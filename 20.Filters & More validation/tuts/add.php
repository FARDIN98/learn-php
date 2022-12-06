<?php

    // using get method the data that we extracted from server showed in the page & also URL
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    // using post method the data that we extracted from server showed in the page but not in the URL which is comparatively secure than get method

    //htmlspecialchars is a function. to save from XSS(Cross Site Scripting attacks). The JS code(virus) if anyone do input in the form then it might take us to that sites and forcefully download the virus for us. htmlspecialchars function transforms the JS Code into html entities 
    if(isset($_POST['submit'])){
        //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        } else{
            // echo htmlspecialchars($_POST['email']);
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'email must be a valid email address <br />';
            }
        }

        // check title
        if(empty($_POST['title'])){
            echo 'A title is required <br />';
        } else{
            // echo htmlspecialchars($_POST['title']);
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                echo 'Title must be letters and spaces only <br />';
            }
        }

        // Check ingredients
        if(empty($_POST['ingredients'])){
            echo 'Some ingredients are needed <br />';
        }else{
            // echo htmlspecialchars($_POST['ingredients']);
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                echo 'ingredients must be a comma separated lits';
            }
        }
    } //end of post check


?>


<!DOCTYPE html>
<html>

    <?php include 'templates/header.php' ?>

    <section class="container grey-text">
        <h4 class="center">
            Add a Pizza
        </h4>
        <form class="white" action="add.php" method="POST">
            <label for="">Your Email:</label>
            <input type="text" name="email">

            <label for="">Pizza title:</label>
            <input type="text" name="title">

            <label for="">Ingredients (comma separated):</label>
            <input type="text" name="ingredients">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include 'templates/footer.php' ?>
    

</html>