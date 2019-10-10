<?php

echo "WELCOME!! I am the header php file.";
$myfile=fopen("myname.txt", "w");
$surname="Abhang\n";
fwrite(myname.txt,$surname);
$firstname="Aditi\n";
fwrite(myname.txt,$firstname);

fclose($myfile);
$read=file('myname.txt');
$count=count($read);
$i=0;
foreach ($read as $line) {
  echo $line;
  if($i<count){
    echo " ,";
  }
  $i++;
}

 ?>
