<?php

    // indexed arrays - we use index of the element to access them or override them etc

    $peopleOne = ['shaun', 'crystal', 'ryu'];

    // echo $peopleOne[1];

    $peopleTwo = array('ken', 'chun-li');
    // echo $peopleTwo[1];

    $ages = [20,30,40,50];
    // print_r($ages); 
    //print_r means print readable. Its going to print a readable version of this array

    $ages[1] = 25;
    // print_r($ages);
    $ages[] = 60;
    // print_r($ages);

    array_push($ages, 70);
    // print_r($ages);

    // echo count($ages);

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    // print_r($peopleThree);
    //output: Array ( [0] => shaun [1] => crystal [2] => ryu [3] => ken [4] => chun-li )


    // associative arrays (key & value pairs)

    $ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown'];  //here shaun is the & black is the value

    // echo $ninjasOne['mario'];
    // output: orange

    // print_r($ninjasOne);
    // output: Array ( [shaun] => black [mario] => orange [luigi] => brown )

    $ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
    // print_r($ninjasTwo);
    // output: Array ( [bowser] => green [peach] => yellow )

    $ninjasTwo['toad'] = 'pink';
    // print_r($ninjasTwo);
    // output: Array ( [bowser] => green [peach] => yellow [toad] => pink )

    $ninjasTwo['peach'] = 'pink';
    // print_r($ninjasTwo);
    // output: Array ( [bowser] => green [peach] => pink [toad] => pink )

    // echo count($ninjasOne);
    // output: 3


    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
    print_r($ninjasThree);

    // output: Array ( [shaun] => black [mario] => orange [luigi] => brown [bowser] => green [peach] => pink [toad] => pink )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php array</title>
</head>
<body>
    
</body>
</html>