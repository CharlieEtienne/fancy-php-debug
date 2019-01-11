# Fancy PHP Debug
Debug Easily and quickly some PHP code without installing anything

## Install and setup

1. **Copy** all code from **[functions.php](https://github.com/CharlieEtienne/fancy-php-debug/blob/master/functions.php)** in a php file (i.e. functions.php in WordPress)
2. (Optional) **Copy** all code from **[style.css](https://github.com/CharlieEtienne/fancy-php-debug/blob/master/style.css)** in your css to make output look better

## How to use

### Output var on page
```php
dd($var, $context);
```

### Output var on page and stop execution
```php
ddd($var, $context);
```

### Output var in browser's console
```php
dc($var, $context);
```

*(Context is optional).*

## Example of use (Debug in Console)

This code:
```php
<?php
$users = [
	"1" => [
		"id"   => "1",
		"name" => "John Doe",
	],
	"2" => [
		"id"   => "2",
		"name" => "Jane Doe",
	]
];

dc($users, '$users'); // Be sure to use simple quotes if you want to output the variable name in context param
```

Will give this in Chrome's Console:

![Result](https://github.com/CharlieEtienne/fancy-php-debug/blob/master/result.PNG)
