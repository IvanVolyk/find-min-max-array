<?php
$numbers = array(93, -2, 12, 23, 145, 0, -5);

$min = min($numbers);
$max = max($numbers);

echo $min . "<br>" . "<br>";
echo $max;

$numbersM = array(9, 2, 12, 23, 31, 0, -15);
$n = count($numbers);

for ($i = 0; $i < $n-1; $i++) {
    for ($j = 0; $j < $n-$i-1; $j++) {
        if ($numbersM[$j] > $numbers[$j+1]) {

            $temp = $numbersM[$j];
            $numbersM[$j] = $numbersM[$j+1];
            $numbersM[$j+1] = $temp;
        }
    }
}

$minM = $numbersM[0];

$maxM = $numbersM[$n-1];

echo "<br>" . "<br>" . $maxM . "<br>" . "<br>";
echo $minM . "<br>" . "<br>";

?>