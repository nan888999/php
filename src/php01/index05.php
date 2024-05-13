<?php
$count = 0;
echo "<br>";

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i =1; $i <=50; $i++) {
    if ($i %15 == 0) {
        echo $FizzBuzz;
    } else if ($i % 3 == 0) {
        echo $Fizz;
    } else if ($i % 5 == 0) {
        echo $Buzz;
    } else {
        echo $i;
    }
}
echo "<br>";

for ( $i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "⚫︎";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}
echo "<br>";

$num = 0;
do {
    echo "num = " . $num . "<br>";
    $num++;
} while ($num < 3);

