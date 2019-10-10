##### = PHP NOTES =
------------------------------------------------------
- php -h
> gives our all the help commands for php
-------------------------------------------------------

- php -S
> to connect to the server, to get the output on a webpage
>syntax:
>     php -S < addr >:< port >
-------------------------------------------------------
- Tip:
> With doubl quotes " ", you can use variables, whereas single quotes is used *only* to display the string.
> But you can always use different options to diplay, like below.

> Example:
     1. echo 'Hello, '.$name;
     2. echo "Hello, $name";
     3. echo "Hello, {$name}";

- <u>url tips:</u>

> The thing we see on the url, like,
localhost:8888?order=asc(or desc), it means the order of the values/the data is in ascending or descending order.

> Also, we often see localhost:8888?order=asc&keys=values, it means ' the order is ascending and the keys are the data we have in the code.'

- $_ GET['key']

> It returns the key value on the web page.

> Example:
> 1. $name = $_ GET['name']
> 2. You can edit the url by name = Aditi, and it will display Aditi

> <a href="http://url link.com">$name</a> to add link to the above word.

- var_dump() function:
> This functions displays the structured information (type and value)
- Example:
>Code:  
> $fruits = array("Banana", "Apple", "Mango", "Coconut");  
> var_dump($fruits);

> ?>

>Output:   
> array(4) {
  [0]=>
  string(6) "Banana"
  [1]=>
  string(5) "Apple"
  [2]=>
  string(5) "Mango"
  [3]=>
  string(7) "Coconut"
}
- constructor:                                                
> The 'construct' method starts with two underscores ( _ _ ).                                                  
> Syntax:    
> function _ _ construct ( [ argument1, argument2, ..., > argumentN])
{
/* Class initialization code * /
> }   

> The type of argument1, argument2,.......,argumentN are mixed.

>Associative Arrays:
Associative arrays are arrays that use named keys that you assign to them.

>There are two ways to create an associative array:
>>$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");

> // or $people['David'] = "27"; people['Amy'] = "21";

><p>The foreach Loop
>
>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
>
>There are two syntaxes:
>
>foreach (array as $value) {
>
>  code to be executed;
>
>}
>//or
>foreach (array as $key => $value) {
>   code to be executed;
>}

>The first form loops over the array. On each iteration, the value of the current element is assigned to $value, and the array pointer is moved by one, until it reaches the last array element.
The second form will additionally assign the current element's key to the $key variable on each iteration.

>The following example demonstrates a loop that outputs the values of the
>
>$names array.
$names = array("John", "David", "Amy");
foreach ($names as $name) {
   echo $name.'<br />';
}

// John
// David
// Amy
</p>
