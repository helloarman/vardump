
# Vardump

This will help you to use var_dump() and print_r() on your blade with the pre tag. People who are familiar with these php functions will benefit from this.


## Package For

 - Laravel


## Installation

Goto your laravel Project and Run -

```bash
  $ composer require helloarman/vardump
```
    
## Explantation

print_r() is a helpful function in PHP for printing the contents of an associative array. It displays the structure and values of the array in a more human-readable format, which can be useful for debugging and understanding the data.

```bash
Array
(
    [0] => fish
    [1] => flower
    [fruit] => Array
        (
            [0] => mango
            [1] => apple
        )
)
```
If you want to write the output of print_r() to a file with a well-formatted structure, including indentation and line breaks, you can make use of the pre tag in HTML. The pre tag preserves the formatting of the text within it, including white spaces, line breaks, and indentation. It will seem like this -

```php
echo "<pre>";
    print_r($data);
echo "</pre>";
die();
```

Each and every time its hard to write this while debugging. so I made this package for making easy access of it.

Good thing is, you can also pass an Object! it will convert that on -
```php
echo "<pre>";
    print_r($data->toArray());
echo "</pre>";
die();
```

Also, sometime we need to check data type of our variable. 
```php
var_dump($variable);
die();
```

It will also done by this package.

## Usage/Examples

So now you can use those php function by a single laravel function - 

### On PHP File call this function by -

```php
ar($data)
```


### You can also call this function on your blade by adding @ as prefix -

```php
@ar($data)
```
Pass your any variable into it. It will show output on your view page.
## Badges

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

[![MIT License](https://img.shields.io/github/forks/helloarman/vardump)](https://github.com/helloarman)

[![MIT License](https://img.shields.io/badge/Laravel-Package-red)](https://laravel.com)

## Feedback

As this is the first release, There might be some improvement. If you need any addon or modification then do not hesitate to mention me. Contact me on -

- contact.armanrahman@gmail.com

## Authors

- Arman Rahman ( [@helloarman](https://www.github.com/helloarman) )