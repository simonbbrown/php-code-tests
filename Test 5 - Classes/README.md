# Level 2 - Classes

Without running the code, what is the value of $var1 and $var2?

Explain why.

```php
<?php

class A
{
    public static function foo1()
    {
        return self::bar();
    }

    public static function foo2()
    {
        return static::bar();
    }

    public static function bar()
    {
        return "A";
    }
}

class B extends A
{
    public static function bar()
    {
        return "B";
    }
}

$var1 = B::foo1();
$var2 = B::foo2();
```