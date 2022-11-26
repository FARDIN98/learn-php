<?php
    //multi-dimensional array
    $blogs = [
        ['title'=>'mario party','author'=>'mario', 'content'=>'lorem','likes'=>30],
        ['title'=>'mario cart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
        ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
    ];
    // print_r($blogs);
    // output: Array ( [0] => Array ( [0] => mario party [1] => mario [2] => lorem [3] => 30 ) [1] => Array ( [0] => mario cart cheats [1] => toad [2] => lorem [3] => 25 ) [2] => Array ( [0] => zelda hidden chests [1] => link [2] => lorem [3] => 50 ) )

    // print_r($blogs[1][1]);
    // output: toad

    // echo $blogs[2]['author'];
    // output: link

    $blogs[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];
    // print_r($blogs);
    // output: Array ( [0] => Array ( [title] => mario party [author] => mario [content] => lorem [likes] => 30 ) [1] => Array ( [title] => mario cart cheats [author] => toad [content] => lorem [likes] => 25 ) [2] => Array ( [title] => zelda hidden chests [author] => link [content] => lorem [likes] => 50 ) [3] => Array ( [title] => castle party [author] => peach [content] => lorem [likes] => 100 ) )

    $popped = array_pop($blogs);
    // print_r($popped);
    // output: Array ( [title] => castle party [author] => peach [content] => lorem [likes] => 100 )


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional array</title>
</head>
<body>
    
</body>
</html>