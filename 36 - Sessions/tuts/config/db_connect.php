<?php 

// MYSQLI -> My Sql improved or PDO -> php data objects
                         /*server name, username, password, database name*/
    $conn = mysqli_connect('localhost', 'shaun', 'test1234', 'ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }




?>