# Level 2 - Classes

Without running the code, what is the output.

```php
<?php

$str1 = 'yabadabadoo';
$str2 = 'yaba';

var_dump(strpos($str1, $str2));

if (strpos($str1, $str2)) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
```