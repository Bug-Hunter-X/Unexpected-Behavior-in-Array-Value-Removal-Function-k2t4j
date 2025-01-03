# PHP Array Value Removal Bug
This repository demonstrates a common error in PHP when attempting to remove a specific value from an array. The function `my_function` aims to remove the first occurrence of the value 'target'. However, it fails to remove subsequent occurrences. This is because the `break;` statement stops the loop after the first removal. 

The `bug.php` file contains the buggy code. The `bugSolution.php` shows the corrected version. 