```php
<?php
function incrementInteger(&$var) {
  if (is_int($var)) {
    $var++;
  } else {
    trigger_error('Variable is not an integer', E_USER_WARNING);
  }
}

function incrementArray(array &$arr, int $index) {
  if (isset($arr[$index])) {
    $arr[$index]++;
  } else {
    trigger_error('Array index does not exist', E_USER_WARNING);
  }
}

$number = 10;
incrementInteger($number);
echo $number; // Output: 11

$array = [1, 2, 3];
incrementArray($array, 0);
echo "\n";
print_r($array); // Output: Array ( [0] => 2 [1] => 2 [2] => 3 )

?>
```