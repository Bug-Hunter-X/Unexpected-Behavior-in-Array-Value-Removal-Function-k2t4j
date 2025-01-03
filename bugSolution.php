```php
function my_function($arr, $target) {
  $keys = array_keys($arr, $target);
  foreach ($keys as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$my_array = ['a', 'b', 'target', 'c', 'target', 'd'];
$result = my_function($my_array, 'target');
print_r($result); // Output: Array ( [0] => a [1] => b [3] => c [5] => d ) 

//Solution: Improved Function for Multiple Occurrences
//This version uses array_keys to find all indices of the target value and removes them all iteratively using unset. This ensures the removal of all occurrences. 
```