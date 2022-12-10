<?php

    // using get method the data that we extracted from server showed in the page & also URL
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    // using post method the data that we extracted from server showed in the page but not in the URL which is comparatively secure than get method

    //htmlspecialchars is a function. to save from XSS(Cross Site Scripting attacks). The JS code(virus) if anyone do input in the form then it might take us to that sites and forcefully download the virus for us. htmlspecialchars function transforms the JS Code into html entities 

    include('config/db_connect.php');

    $title = $email = $ingredients = '';

    $errors = array('email'=> '', 'title'=> '', 'ingredients' => '');

    if(isset($_POST['submit'])){
        //check email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required <br />';
        } else{
            // echo htmlspecialchars($_POST['email']);
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] =  'email must be a valid email address <br />';
            }
        }

        // check title
        if(empty($_POST['title'])){
            $errors['title'] = 'A title is required <br />';
        } else{
            // echo htmlspecialchars($_POST['title']);
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = 'Title must be letters and spaces only <br />';
            }
        }

        // Check ingredients
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = 'Some ingredients are needed <br />';
        }else{
            // echo htmlspecialchars($_POST['ingredients']);
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] = 'ingredients must be a comma separated list';
            }
        }

        // array filter cycles through our array and it performs some kind of callback function on each one we can define the call function in here 

        // if there are errors that are not empty inside it then it will evaluate as true. So, thats a nice little way to check if there are any errors inside it.

        // if there are no errors inside this it will return to false. So, when it returns to false it means we don't have an errors. If it return true it means we do have an error.
        if(array_filter($errors)){
            echo 'errors in the form';
        } else {
            // echo 'form is valid';

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            // create sql
            $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES ('$title','$email', '$ingredients')";

            // save to db and check
            if(mysqli_query($conn, $sql)){
                // success
                header('Location: index.php');
            }else{
                // failure
                echo "query error: " . mysqli_error($conn);
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
            <input type="text" name="email" value = "<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email'] ?></div>

            <label for="">Pizza title:</label>
            <input type="text" name="title" value = "<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title'] ?></div>

            <label for="">Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value = "<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients'] ?></div>

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include 'templates/footer.php' ?>
    

</html>