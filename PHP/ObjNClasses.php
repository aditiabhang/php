
<html>
<head>
<title>Object method example 1</title>
</head>
<body>
<?php

class Myclass
{
// Declaring three private variables
private $font_size;
private $font_color;
private $string_value;
// Declarte construct method which accepts three parameters
function __construct($font_size,$font_color,$string_value)
{
$this->font_size = $font_size;
$this->font_color = $font_color;
$this->string_value = $string_value;
}
// Declare a method for customize print
function customize_print()
{
echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
}
}
// Create a new object and passes three parameters
$f = new MyClass('36px','blue','Mrs. Aditi Sanket Lawangare');
// Call the method to display the string
echo $f->customize_print();
?>
</body>
</html>
