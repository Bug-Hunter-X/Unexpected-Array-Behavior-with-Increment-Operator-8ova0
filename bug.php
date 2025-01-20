```php
<?php
function increment(&$var) {
  $var++;
}

$number = 10;
increment($number);
echo $number; // Output: 11

$array = [1, 2, 3];
increment($array); // This will produce a warning
echo "\n";
print_r($array); // Output:  Array ( [0] => 1 [1] => 2 [3] => 3 ) 

?>
```