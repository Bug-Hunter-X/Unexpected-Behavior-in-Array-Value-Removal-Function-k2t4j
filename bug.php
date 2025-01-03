```php
function my_function($arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      unset($arr[$key]);
      break; // This line is crucial to avoid issues when 'target' appears multiple times
    }
  }
  return $arr;
}

$my_array = ['a', 'b', 'target', 'c', 'target', 'd'];
$result = my_function($my_array);
print_r($result); // Output: Array ( [0] => a [1] => b [3] => c [5] => d ) 

//Problem: Unexpected Behavior with Multiple Occurrences
//The issue arises when the target value appears multiple times within the array. The original code only removes the first occurrence and stops.
```