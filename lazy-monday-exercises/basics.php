
<h2>Variables</h2>
<?php

$months = 12;
$christmas = "Christmas";
$untilXmas = 2.5;

$xmasFact = "There are {$months} months in a year, and there are only {$untilXmas} months till {$christmas}";

echo $xmasFact;
?>
<br>
<?php

$newYear = 'There are a little longer until New Year';

echo $newYear;
?>
<br>
<br>

<h2>Arrays</h2>
<br>
<?php
$numberOfMonths = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
print_r($numberOfMonths);
?>
<br>
<?php

$namesOfMonths = ['Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec'];
print_r($namesOfMonths);
?>
<br>

<?php
$mixedArray = ['Apr', 25, 8.5];
print_r($mixedArray); ?>

<br>
<br>
<h2>Looping through the array</h2>
<br>

<?php
$mode = next($numberOfMonths);
print $mode;

$mode = prev($numberOfMonths);
print $mode;
$mode = current($numberOfMonths);
print $mode;

reset($numberOfMonths);
echo reset($numberOfMonths);
?>
<br>
<br>
<h2></h2>
<?php
for ($i=50; $i <= 105 ; $i++) { 
    echo $i;
}?>
<br>
<?php 
for ($i=0; $i <= 40 ; $i+=2) { 
    echo "The even numbers are: $i <br>";
}?>

<br>
<br><pre>
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

//Assign an id property using the for loop

for ($i=0; $i < 6 ; $i++) { 
    $star_trek_members[$i]["id"] = $i;
}

var_dump($star_trek_members);

//fetch the actors name
var_dump($star_trek_members[0]["actor"]);

//Sort the array alphabetically based on the name property






?>
</pre>






