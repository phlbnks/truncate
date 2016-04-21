Truncate
==================================================
v0.1

Truncate is a PHP function to create extracts of text, giving various otions for how and where it cuts the text. 



Getting Started
---------------
Call the function with `truncate($type, $string, $length, $break, $pad);`.
All options have defaults and so do not have to be specified, except for `$string` and `$length`.

`$type` accepts two options - `words` or `chars`. 
`$string` should be passed the string you want to shorten.
`$length` accepts a numeric value for the number of words of characters (whichever you have set) you want to trim to, eg, `'150'`.
`$break` accepts three options - `'.'`, `' '`, or `'*'`. The first two options allow you to trim the text at the first full-stop after the limit is reached, or the end of the next word respectively. The last allows the trim to occur at the next character after the limit.
`$pad` accepts any string you want to appear after the trimmed text, eg `'...'`. If you have set `$break='.'` (or left it at default), then a space is inserted before the `$pad` character. 