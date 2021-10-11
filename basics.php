<!-- Variables -->
<h2>Variables</h2>
<?php 
    $integer = 14;
    $float = 3.1415;
    $string = 'This is a string';

    $a = $integer . " " . $string . " " . $float;
    print $a;


?>
<br/>

<!-- add number to string -->
<?php 
    $numberstr = "4.53";

    echo $numberstr;
?>
<br/>
<?php
    echo $numberstr + 1;
?>
<br/>

<!-- subrtact 2 strings -->
<?php
    $b = "592" - "28.8";
    echo $b;
?>
<br/>

<!-- Calculate the sum -->
<?php
    $cal1 = '1.1' + 1 - '-1';
    echo $cal1;

    $cal2 = '1,1' + 0.2 - '0.6' * 14;
    echo $cal2;
?>
<br/>

<!-- strpos -->
<?php
$mystring = 'bac';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
?>

<!-- Arrays -->
<h2>Arrays</h2>
<!-- Array of numbers -->
<?php
    $numbersArr = [1, 2, 3, 4, 5];
    print_r($numbersArr);
?>
<br/>
<!-- Array of numbers -->
<?php
    $stringArr = array('This ', 'is ', 'a ', 'string ', 'array ');
    print_r($stringArr);
?>

<br/>
<!-- Mixed array -->
<?php
    $mixedArr = [1, 6.5, 'string'];
    print_r($mixedArr);
?>

<!-- Loops -->
<h2>Loops</h2>

<!-- Navigating arrays -->
<?php
    $mode = current($stringArr);
    print $mode;
    $mode = next($stringArr);
    print $mode;
    $mode = next($stringArr);
    print $mode;
    $mode = next($stringArr);
    print $mode;
    $mode = next($stringArr);
    print $mode;
    $mode = prev($stringArr);
    print $mode;
    $mode = reset($stringArr);
?>
<br/>
<?php
    for ($x = 50; $x <= 105; $x++) {
    // echo "The number is: $x <br>";
}
?>

<br/>
<?php
    for ($x = 0; $x <= 20; $x+=2) {
    echo "The even numbers are: $x <br>";
}
?>

<br/><pre>
<?php
    $star_trek_members = [     
        [
            'actor' => 'Walter Koenig', 
            'name' => 'Pavel Chekov',
            'rank' => 'security officer.'
        ],[
            'actor' => 'Leonard Nimoy', 
            'name' => 'Spock',
            'rank' => 'science officer.'
        ],[
            'actor' => 'William Shatner', 
            'name' => 'James T. Kirk',
            'rank' => 'security officer'
        ],[
            'actor' => 'James Doohan', 
            'name' => 'Montgomery Scott',
            'rank' => 'chief engineer.'
        ],[
            'actor' => 'Nichelle Nichols', 
            'name' => 'Nyota Uhura',
            'rank' => 'communications / science officer.'
        ]
    ];

    // assign id
    for ($i=0; $i < 5; $i++) { 
        $star_trek_members[$i]["id"] = $i;
    }

    var_dump($star_trek_members);
    
    // actors name
    var_dump($star_trek_members[0]["actor"]);

?>
<h2>sort</h2>
<?php
    usort($star_trek_members, function ($a, $b) {
        return $a['name'] <=> $b['name'];
    });
    print_r($star_trek_members);
?>
<h2>switch</h2>
<?php


    for ($i=0; $i < 5; $i++) { 
        $star_trek_members[$i]["shirt_color"] = $color;
    }

    switch ($color) {
        case "security":
            echo "red";
            break;
        case "science":
            echo "blue";
            break;
        case "engineer":
            echo "yellow";
            break;
    }

var_dump($star_trek_members);
?>

</pre>