<?php 

    // session

    session_start();

    // if we want too delete the name
    if($_SERVER['QUERY_STRING'] == 'noname'){
        session_abort();
    }

    // if the session name exist then it will display in the header. if not the 'Guest' will be shown
    $name = $_SESSION['name'] ?? 'Guest';


?>





<head>
    <title>NInja Pizza</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }

        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>

</head>
    <body class="grey lighten-4">
        <nav class="white z-depth-0">
            <div class="container">
                <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?> </li>
                    <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
                </ul>
            </div>
        </nav>
        
    