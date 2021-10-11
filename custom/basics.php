<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$document</title>
</head>

<body>
  <?php $phpinfo = "phpinfo(); spams a lot of info into the page";
  $int = 205;
  $float = 1.235223216885;
  $string = 'this is a string';
  $string2 = "lorem \$ipsum";
  $concat = $int . $string2;

  echo $concat;
  //205lorem $ipsum 
  echo "<br>";

  echo '5' + 5;
  // 10
  echo "<br>";

  echo "55" - '5';
  // 50
  echo "<br>";
  echo '1.1' + 1 - '-1';
  // 
  echo "<br>";
  echo '1.1' + 0.2 - '0.6' * 14;
  // fixed , to .
  echo "<br>";
  echo strpos($phpinfo, 'lot');
  // 19
  echo "<br>";

  $numArray = array(
    5,
    1,
    5,
    6,
    7,
    8
  );
  foreach ($numArray as $numb) {
    echo $numb . ' ';
    //spits out array values
  }
  echo "<br>";
  $strArray = array(
    'this',
    'is',
    'a',
    'string',
    'array'
  );
  foreach ($strArray as $str) {
    echo $str;
    echo "<br>";
    //spits out array values
  }
  echo "<br>";
  $mixedArray = [
    'this',
    'is',
    1,
    "mixed",
    'array',
    0.125
  ];
  foreach ($mixedArray as $value) {
    echo next($mixedArray);
    echo "<br>";
    //spits out array values while ignoring the foreach loop
    // this skips the first value and does not wrap
  }
  echo reset($mixedArray);
  echo "<br>";

  $autoArray = array();
  for ($i = 50; $i < 106; $i++) {
    array_push($autoArray, $i);
  }

  foreach ($autoArray as $value) {
    echo $value;
    echo " | ";
    //spits out array values
  }
  echo "<br>";
  echo "<br>";

  $evenArray = [];
  for ($i = 0; $i < 101; $i++) {
    if (!($i % 2)) {
      array_push($evenArray, $i);
    }
  }

  foreach ($evenArray as $value) {
    echo $value;
    echo " | ";
    //spits out array values
  }
  echo "<br>";

  $star_trek_members = [
    [
      'actor' => 'Walter Koenig',
      'name' => 'Pavel Chekov',
      'rank' => 'security officer'
    ], [
      'actor' => 'Leonard Nimoy',
      'name' => 'Spock',
      'rank' => 'science officer'
    ], [
      'actor' => 'William Shatner',
      'name' => 'James T. Kirk',
      'rank' => 'security officer'
    ], [
      'actor' => 'James Doohan',
      'name' => 'Montgomery Scott',
      'rank' => 'chief engineer'
    ], [
      'actor' => 'Nichelle Nichols',
      'name' => 'Nyota Uhura',
      'rank' => 'communications / science officer'
    ]
  ];
  for ($i = 0; $i < sizeof($star_trek_members); $i++) {
    $star_trek_members[$i]['ID'] = $i;
    // assigns IDs
  }
  echo "<br>";
  for ($i = 0; $i < sizeof($star_trek_members); $i++) {
    if (strpos($star_trek_members[$i]['rank'], 'officer')) {
      // this will not work if the officer is the 0th index of the string
      echo $star_trek_members[$i]['actor'];
      break;
    }
  }
  echo "<br>";

  // CTRL C + CTRL V https://stackoverflow.com/questions/10484607/php-sort-array-alphabetically-using-a-subarray-value/10484863
  function compareByName($a, $b)
  {
    return strcmp($a["name"], $b["name"]);
  }
  usort($star_trek_members, 'compareByName');
  echo "<br>";

  for ($i = 0; $i < sizeof($star_trek_members); $i++) {
    // yoinked https://stackoverflow.com/questions/4175910/how-to-use-a-php-switch-statement-to-check-if-a-string-contains-a-word-but-can
    switch (true) {
      case stristr($star_trek_members[$i]['rank'], 'security officer'):
        $star_trek_members[$i]['shirt_color '] = '#FF0000';
        break;
      case stristr($star_trek_members[$i]['rank'], 'science officer'):
        $star_trek_members[$i]['shirt_color '] = '#0000FF';
        break;
      case stristr($star_trek_members[$i]['rank'], 'chief engineer'):
        $star_trek_members[$i]['shirt_color '] = '#00FF00';
        break;
      default:
        $star_trek_members[$i]['shirt_color '] = '#FFFFFF';
        break;
    }
  }
  echo "<br>";
  echo json_encode($star_trek_members);
  // print_r($star_trek_members);
  //spits out array values
  echo "<br>";
  function add($a, $b)
  {
    // this does not check for type
    return $a + $b;
  }
  function fullName($first_name, $middle_name, $last_name)
  {
    return $first_name . ' ' . $middle_name . ' ' . $last_name;
  }
  
  function no_args()
  {
    $funcsArgs = func_get_args();
    if (count($funcsArgs) == 1) {
      return true;
    } else if (count($funcsArgs) == 2) {
      foreach ($funcsArgs as $arg) {
        switch (gettype($arg)) {
          case 'string':
            return $funcsArgs[0] . $funcsArgs[1];
            break;
            case 'integer':
              return $funcsArgs[0] + $funcsArgs[1];
              break;
              
              default:
              # code...
              break;
            }
          }
        } else {
          return;
        }
      }
      
      echo add(5, 1);
      echo "<br>";
      echo fullName('Fname', 'Mname','Lname');
      echo "<br>";
      echo no_args(2, 1);
      echo "<br>";
      echo no_args('do','stuff');

  ?>

</body>

</html>